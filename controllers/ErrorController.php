<?php 
use HomegrownMVC\Controller\BaseController as BaseController;

/*
 * Handle custom error routes
 */
class ErrorController extends BaseController {
	protected function setupRoutes() {
		return array(
			'404' => function($context) {
				$viewEngine = $context->getViewEngine();
				
				$viewEngine->assign('error_msg', "404: Page Not Found");
				$viewEngine->display('views/error.html');
			}
		);
	}
}
?>
