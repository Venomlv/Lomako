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
			echo 'User Write: '.$this->getURI();
			echo 'Element: '.$newuri;
			echo 'Path'.$path;
			
			$controllerName = 'HomeController';
			
			$object = new $controllerName;
		}
	}
}