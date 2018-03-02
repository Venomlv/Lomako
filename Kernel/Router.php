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
		{
			return trim($_SERVER['REQUEST_URI'], '/');
		}
	}
	
	public function Run()
	{
		$UserRequest = $this->getURI();
		echo $UserRequest;
	}
}