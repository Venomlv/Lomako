<?php 

class Router
{
	private $ways;
	
	public function __construct()
	{
		$this->ways = include(ROOT.'/options/ways.php');
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
	}
	
	return true;
}