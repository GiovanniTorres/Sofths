<?php
class Router {
	private $route ;

	public function __construct ($route) {
		if (!isset($_SESSION)) session_start () ;
		if (!isset($_SESSION['i'])) $_SESSION['i'] = false ;
		$viewscontroller = new ViewsController () ;
		$divide = explode("/", $route);
		/*switch ($divide[0]) {
			case "home":
				$viewscontroller -> view ($route) ;
				break;

			case "Tienda":
				$viewscontroller -> view ("/Tiendas/Tienda") ;
				break;

			case "Imagen":
				$viewscontroller -> view ("/Tiendas/Imagen") ;
				break;

			case "template1":
				$viewscontroller -> view ($route) ;
				break;

			case "exit":
					$user_session = new SessionController () ;
					$session = $user_session->logout();
					break;
			
			default:
				$viewscontroller -> view ("error404") ;
				break;
		}*/

		if (isset($divide[4])) {
			if ($divide[4] == "Imagen") {
				$viewscontroller -> view ("/stores/Imagen") ;
			}
		} elseif ($divide[0] == "home") {
			$viewscontroller -> view ($route) ;
		} elseif ($divide[0] == "Tienda") {
			$viewscontroller -> view ("/stores/Tienda") ;
		} /*elseif ($divide[0] == "CreateCharge") {
			$viewscontroller -> view ("/stores/CreateCharge") ;
		}*/ elseif ($divide[0] == "exit") {
			$user_session = new SessionController () ;
			$session = $user_session->logout();
		}
		

	}

	public function __destruct () {
		unset($this->route) ;
	}
}