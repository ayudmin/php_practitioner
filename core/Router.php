<?php 


class Router 

{
    public $routes = [

        'GET' => [],

        'POST' => []
    ];

    public static function load($file)

    {
        $router = new static;

        require $file;

        return $router;

    }


    public function get($uri, $controller)

    {

        $this->routes['GET'][$uri] = $controller;

    }

    public function post($uri, $controller)

    {

        $this->routes['POST'][$uri] = $controller;

    }

    public function direct($url, $requestType)

    {

        if (array_key_exists($url, $this->routes[$requestType])){

            return $this->routes[$requestType][$url];

        } else {

            throw new Exception('This route does not exit.');

        }
    }
}