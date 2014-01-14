<?php
/*
 * This file bootstraps the HomegrownMVC infrastructure. In general, you
 * shouldn't have to edit this file.
 *
 * Author: Bremen Braun
 */
include_once('lib/HomegrownMVC/HomegrownMVC.php');
include_once('lib/Smarty/Smarty.class.php');

/*** Server config ***/
Config::reifyEnvironment(); // sets some environmental variables needed by various things
date_default_timezone_set('UTC');

/*** Bootstrap HomegrownMVC ***/
$dbh = new PDO(Config::DSN, Config::USER, Config::PASSWORD);
$viewEngine = new Smarty();
$router = new HomegrownMVC\Router();

Config::bootstrapViewEngine($viewEngine);
$router->autoloadControllers(new HomegrownMVC\Context(new HomegrownMVC\Request\HTTPRequest(), $dbh, $viewEngine), 'controllers'); // automatically include all the controllers in the /controllers directory
$router->redirect('/', 'home'); // automatically display the /home route
if (!$router->handleRoute()) { // If no controller is found for the current path, manually invoke 404 from controllers/ErrorController.php
	$router->handleRoute('404');
}
?>
