<?php

/*
 * A project-wide configuration store
 */
class Config {

/*** GENERAL ***/
	const VERSION = "0.0.1";
	const TMP_DIR = "tmp"; // folder to store temporary files relative to the webroot
	static $env_vars = array( // anything that needs to be injected into the environment (oracle paths, etc.)
	);

/*** DATABASE ***/
	const DSN = "";
	const USERNAME = "";
	const PASSWORD = "";

/*** ETC ***/
	
/*** FUNCTIONS ***/

	/*
	 * This is called by the bootstrapper (index.php) to actually put the
	 * environment variables into the environment
	 */
	static function reifyEnvironment() {
		foreach (static::$env_vars as $ekey => $eval) {
			putenv("$ekey=$eval");
		}
	}
	
	/*
	 * Assign values to variables that can be accessed from any template in the
	 * view engine
	 */
	static function bootstrapViewEngine($engine) {
		$engine->assign('version', static::VERSION);
	}
}
?>
