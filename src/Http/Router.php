<?php 


namespace Src\Http;

class Router {

    public static $get = [];
    public static $post = [];

    public static function registerRoutes(array $routes){
        // self::$routes = $routes;
    }

    public static function add(string $uri, array $action){
        // self::$routes[$uri] = $action;
    }


    public static function get(string $uri, array $action){
        self::$get[$uri] = $action;
    }

    public static function post(string $uri, array $action){
        self::$post[$uri] = $action;
    }


    public static function find($route, $method){
        
        $routeMethod = strtolower($method);

        $findedRoute = self::$$routeMethod[$route];

        $controller = new $findedRoute[0];

        $action = $findedRoute[1];

        $controller->$action();
    }

}