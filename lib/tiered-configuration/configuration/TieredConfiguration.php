<?php
namespace configuration;

use configuration\ConfigurationReader as ConfigurationReader;
use configuration\util\MultilevelTreeCache as MultilevelTreeCache;
use configuration\util\TreeWalker as TreeWalker;

/*
 * Cascading configuration format
 *
 * Author: Bremen Braun
 */
class TieredConfiguration implements ConfigurationReader {
	private $cache;

	/*
	 * Read in a configuration from an array of adapters sources, where adapters
	 * closer to the end of the array have higher priority
	 */
	function __construct($adapters) {
		$level = 0;
		$cache = new MultilevelTreeCache(count($adapters));
		foreach ($adapters as $adapter) {
			$cache->cache($adapter->buildConfigurationTree(), $level++);
		}
		$this->cache = $cache;
	}

	/*
	 * A section is just a node
	 */
	function getSection($key) {
		$node = $this->cache->getValue($key);
		$cache = new MultilevelTreeCache(1);
		$cache->cache($node, 0);
		$nodeAPI = $this->cloneWithCache($cache);
		return $nodeAPI;
	}

	/*
	 * A value for a key may be a section or a variable
	 */
	function getValue($key) {
		$section = $this->cache->getValue($key);
		if (count($section->getChildren()) == 1) {
			return $section->getChild(0)->getData();
		}
		return $this->getSection($key)->getData();
	}

  /*
	 * Dump all variables in the configuration
	 */
	function getVariableDump() {
		$vars = array();
		$arrays = array();
		foreach ($this->trees as $tree) {
			$walker = new TreeWalker($tree);
			$walker->walk(TreeWalker::TRAVERSE_BF, function($node) use (&$vars) {
				if ($node->isLeaf() && !$node->isRoot()) {
					$var = $node->getParent()->getData();
					$val = $node->getData();

					if (is_numeric($var)) { // there's a better way to do this...
						$realVar = $node->getParent()->getParent()->getData();
						if (!isset($vars[$realVar])) {
							$vars[$realVar] = array();
						}

						array_push($vars[$realVar], $val);
					}
					else {
						$vars[$var] = $val;
					}
				}
			});
		}

		return $vars;
	}

  function flatten() {
    return $this->cache->flatten();
  }

	/*
	 * In order to traverse the configuration hierarchy while still maintaining
	 * this API, clones will be returned for partial results
	 */
	private function cloneWithCache($cache) {
		$clone = new self(array());
		$clone->cache = $cache;
		return $clone;
	}
}
?>
