<?php
include_once('lib/TieredConfiguration.php');
include_once('errors/ConfigurationException.php');

use configuration\TieredConfiguration as TieredConfiguration;
use configuration\adapter\JSONAdapter as JSONAdapter;

/*
 * A site-wide configuration store
 */
class Config {
	private static $_config = array();
	private static $exports = array();
	private static $ini_settings = array();

	/*
	 * Load in a cascading list of sources, where each level cascades the levels
	 * that come before it
	 */
	static function load($sources) {
		$adapters = array();
		foreach ($sources as $source) {
			array_push($adapters, new JSONAdapter($source));
		}
		$cascading = new TieredConfiguration($adapters);
		static::$exports = self::readFromConfigurationDump($cascading, 'env_vars');
		static::$ini_settings = self::readFromConfigurationDump($cascading, 'ini_settings');

		$dump = $cascading->getVariableDump(); // variables to be called as static methods
    self::$_config = $dump;
	}

	/*
	 * Locate a section whose values are to be treated as an array
	 */
	private static function readFromConfigurationDump($config, $var) {
		$values = array();
		try {
			$varNodes = $config->getConfigurationDump($var);
			foreach ($varNodes->getChildren() as $node) {
				$varKey = $node->getData();
				$varVal = $config->getValue($varKey);
				$values[$varKey] = $varVal;
			}
		}
		catch (Exception $e) {}

		return $values;
	}

	/*
	 * Create functions for each configuration variable that returns its value
	 */
	static function __callStatic($name, $arguments) {
		return self::$_config[$name];
	}

	/*
	 * This is called by the bootstrapper (index.php) to actually put the
	 * environment variables into the environment
	 */
	static function reifyEnvironment() {
		foreach (static::$exports as $ekey => $eval) { // Environment variables
			putenv("$ekey=$eval");
		}
		foreach (static::$ini_settings as $key => $val) { // PHP .ini settings
			ini_set($key, $val);
		}
	}

	/*
	 * Assign values to variables that can be accessed from any template in the
	 * view engine
	 */
	static function bootstrapViewEngine($engine) {
		$engine->assign('version', static::VERSION());

		/* Used by page wrapper */
		$engine->assign('PAGE_URL', $_SERVER['REQUEST_URI']);
		$engine->assign('YEAR', date("Y"));
		
		// Anything other operations you want to do before the view loads...
	}
}
?>

