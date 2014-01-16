<?php 
use HomegrownMVC\Controller\WildcardController as WildcardController;

/*
 * Handle custom error routes.
 * A good practice is to define project-wide errors in this controller and then
 * manually invoke this controller with the given error route through other
 * controllers which "throw" visual error messages. This way, everything that
 * touches your error template is in the same place.
 */
class ErrorController extends WildcardController {
	protected function setupWildcardRoutes() {
		$that = $this;
		
		return array(
			
			/*
			 * Handle the standard 404 route
			 */
			'404' => function($context) use ($that) {
				$that->invokeRoute('/error/404/Page Not Found'); // forward to custom error path
			},
			
			/* STUB: Any other error messages you want to define... */
			
			/*
			 * Handle custom errors which don't have to be explicitly defined
			 */
			 '/error/:code/:description' => function($context, $params) {
			 	$viewEngine = $context->getViewEngine();
			 	$code = $params['code'];
			 	$desc = $params['description'];
			 	
			 	$viewEngine->assign('error_msg', "$code: $desc");
			 	$viewEngine->display('views/error.html');
			 }
		);
	}
}
?>
