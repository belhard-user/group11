<?php

class Route
{
    protected static $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function run()
    {
        $router = new self;
        require_once "routes.php";

        return $router;
    }

    public function get($url, $path)
    {
        self::$routes['GET'][$url] = $path;
    }

    public function post($url, $path)
    {
        self::$routes['POST'][$url] = $path;
    }

    public function proccess()
    {
        $path = Request::path();
        $method = Request::requetMethod();

        if(array_key_exists($path, self::$routes[$method])) {
            return self::$routes[$method][$path] . '.php';
        }else{
            header('HTTP/1.1 404 Not Found');
            return  "controllers/error/404.php";
        }
    }
}