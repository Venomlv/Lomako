<?php

	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	define('ROOT', dirname(__FILE__));
	require_once(ROOT.'/Kernel/Router.php');

	$router = new Router();
	$router->Run();