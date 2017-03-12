<?php

/** Analite PHP Framework
*   @author: Obodugo Rapheal Prince
*	Front Controller
**/
require("../Core/Router.php");

$router=new Router();
$router->add('/', ['controller'=>'Home','action'=>'index']);
$router->add('new', ['controller'=>'New','action'=>'index']);
$router->add('new/post', ['controller'=>'Post','action'=>'show']);

$url=$_SERVER['QUERY_STRING'];

if($router->match($url))
{
	echo var_dump($router->getParams());
}
else
{
	echo "No Match found";
}
//echo get_class($router);
//echo $_SERVER['REQUEST_URI'];