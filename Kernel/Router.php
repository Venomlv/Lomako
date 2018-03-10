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
			  $controller = ucfirst(array_shift($path)."Controller");
				$action = ucfirst(array_shift($path));
			  $params = array_shift($path);
        break;

        echo $path.'<br>';
        echo $controller.'<br>';
        echo $action.'<br>';
        echo $params.'<br>';
			}
		}
    if($controller)
    {
        $object = new $controller();
        $result = $object->$action($params);
        if(!$result)
          header("Location: /error");
    }
    else
      header("Location: /error");
	}
}
