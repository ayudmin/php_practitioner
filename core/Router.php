<?php 


class Router 

{
    protected $routes = [];

    public static function load($file)

    {
        $router = new static;

        require $file;

        return $router;

    }

    public function define($routes)

    {

        $this->routes = $routes;
    }

    public function direct($url)

    {

        if (array_key_exists($url, $this->routes)){

            return $this->routes[$url];

        } else {

            throw new Exception('This route does not exit.');

        }
    }
}