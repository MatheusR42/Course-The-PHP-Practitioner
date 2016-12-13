<?php

class Router
{

    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($file)
    {
        $router = new static;

        require $file;

        return $router;
    }

    public function directs($uri, $requestType)
    {   
        if(array_key_exists($uri, $this->routes[$requestType])){
            return $this->callAction(
                //transforma array em parametros
                ...explode('@', $this->routes[$requestType][$uri])
            );
        }

        throw new Exception('No route define for this URI.');
    }

    protected function callAction($controller, $action)
    {

        $controller = new $controller;
        
        if(! method_exists($controller, $action)){
            throw new Exception("{$controller} does not respond to the {$action} action."); 
        }

        return $controller->$action();
    }


    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }
    

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }
}