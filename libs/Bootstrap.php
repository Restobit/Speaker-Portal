<?php

class Bootstrap
{

	function __construct()
	{

		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		if (empty($url[0])) {
			require_once 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}

		if (count($url) > 3) {
			header('Location: ' . URL);
			exit;
		} else {

			$file = 'controllers/' . $url[0] . '.php';

			if (file_exists($file)) {
				require_once $file;
			} else {
				require_once 'controllers/error.php';
				$controller = new Errors();
				$controller->index();
				return false;
			}

			$controller = new $url[0];
			$controller->loadModel($url[0]);

			if (isset($url[2])) {

				if (method_exists($controller, $url[1])) {
					$controller->{$url[1]}($url[2]);
				} else {
					require_once 'controllers/error.php';
					$controller = new Errors();
					$controller->index();
				}
			} else {

				if (isset($url[1])) {

					if (method_exists($controller, $url[1])) {
						$controller->{$url[1]}();
					} else {
						require_once 'controllers/error.php';
						$controller = new Errors();
						$controller->index();
					}
				} else {

					if (isset($_GET['action'])) {

						$action = $_GET['action'];

						if ($action == "success" || $action == "not_success") {
							$controller->$action();
						} else {
							require_once 'controllers/error.php';
							$controller = new Errors();
							$controller->index();
						}
					} else {
						$controller->index();
					}
				}
			}
		}
	}
}
