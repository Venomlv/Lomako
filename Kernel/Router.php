<?php

class Router
{
	private $routes;

	public function __construct()
	{
		$this->routes = include(ROOT.'/Kernel/Routes.php');
	}

	private function getURI()
	{
		if(!empty($_SERVER['REQUEST_URI']))
			return trim($_SERVER['REQUEST_URI'], '/');
	}

	public function Run()
	{
		require_once(ROOT.'/Controllers/HomeController.php');
		foreach ($this->routes as $newuri => $path)
		{
		 	if ($newuri == $this->getURI())
			{
				$path = explode('/', $path);
				$template = array (
					$controller = array_shift($path),
					$action = array_shift($path),
					$params = array_shift($path)
				);
				var_dump($template);
			}

			$controllerName = 'HomeController';

			$object = new $controllerName;
		}
	}
}
