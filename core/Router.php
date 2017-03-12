<?php

/** Analite PHP Framework.
* 	Router Class
*	@author Obodugo Rapheal Prince.
**/

class Router
{

	/**
	* @var route and params.
	* Params contains all the controllers and actions your applocation will be following.
	**/


	protected $routes=[];
	protected $params=[];

	public function add($route,$params)
	{
		$this->routes[$route]=$params;
	}

	public function getRoutes()
	{
		return $this->routes;
	}

	public function match($url)
	{
		
		foreach($this->routes as $route=>$params)
		{
		
			if($url===$route)
			{
				$this->params=$params;
				return true;
			}
		}
		return false;
		
	}
	public function getParams()
	{
		return $this->params;
	}

	public function matchArea()
	{
	
	}
}