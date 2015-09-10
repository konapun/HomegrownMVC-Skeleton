<?php
use HomegrownMVC\Controller\BaseController as BaseController;

/*
 * Handle all index routes
 */
class IndexController extends BaseController {
	protected function setupRoutes() {
		$this->controllerBase('/');

		$this->beforeRoutes(function($context) { // assign active class
		  $req = $context->getRequest();
		  $view = $context->getViewEngine();
		  $route = substr($req->routeName(), 1);
		  if (!$route) $route = 'home';

		  $active = $route . 'Active';
		  $view->assign($active, 'active');
		});
    return array(

      'home' => function($context) {
        $context->getViewEngine()->display('views/home.html');
      },

			'about' => function($context) {
				$context->getViewEngine()->display('views/about.html');
			},

			'contact' => function($context) {
				$context->getViewEngine()->display('views/contact.html');
			}

    );
  }
}
?>
