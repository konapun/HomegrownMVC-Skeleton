<?php
/*
 * This file bootstraps the infrastructure. In general, you shouldn't have to
 * edit this file.
 *
 */
include_once('lib/HomegrownMVC/HomegrownMVC.php');
include_once('lib/Smarty/Smarty.class.php');
include_once('lib/tiered-configuration/TieredConfiguration.php');
include_once('config/Config.php');

use configuration\TieredConfiguration;
use configuration\adapter\JSONAdapter;

loadConfigurationForEnvironment('config/ENVIRONMENT.json');

/*** Server config ***/
Config::reifyEnvironment(); // sets some environmental variables needed by various things (Oracle connection, etc.)
date_default_timezone_set(Config::TIMEZONE());

/*** Bootstrap HomegrownMVC ***/
$dbh = Config::USE_DATABASE() ? new PDO(Config::DSN(), Config::USER(), Config::PASSWORD()) : null;
$viewEngine = new Smarty();
$router = new HomegrownMVC\Router();

Config::bootstrapViewEngine($viewEngine);
$router->autoloadControllers(new HomegrownMVC\Context(new HomegrownMVC\Request\HTTPRequest(), $dbh, $viewEngine), 'controllers'); // automatically include all the controllers in the /controllers directory
$router->redirect('/', '/home'); // automatically display the /home route
if (!$router->handleRoute()) { // If no controller is found for the current path, manually invoke 404 from controllers/ErrorController.php
	$router->handleRoute('404');
}

/*
 * Load the configuration cascade by specific environment
 */
function loadConfigurationForEnvironment($envFile) {
	$env = new TieredConfiguration(array(new JSONAdapter($envFile)));
	$envName = $env->getValue('environment');
	Config::load(array('config/environments/GLOBAL.json', 'config/environments/DEFAULTS.json', "config/environments/$envName.json"));
}
?>
