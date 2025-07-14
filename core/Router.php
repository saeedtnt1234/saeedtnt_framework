<?php

namespace Core;

class Router
{
    protected static $routes = [
        'GET'    => [],
        'POST'   => [],
        'PUT'    => [],
        'DELETE' => [],
    ];

    public static function get($uri, $action)
    {
        self::$routes['GET'][$uri] = $action;
    }

    public static function post($uri, $action)
    {
        self::$routes['POST'][$uri] = $action;
    }

    public static function put($uri, $action)
    {
        self::$routes['PUT'][$uri] = $action;
    }

    public static function delete($uri, $action)
    {
        self::$routes['DELETE'][$uri] = $action;
    }

public static function dispatch($requestUri, $requestMethod)
{
    $basePath = '/saeedtnt_framework/public'; // اینجا مسیر پروژه تو

    $uri = parse_url($requestUri, PHP_URL_PATH);

    // حذف base path از ابتدا
    if (strpos($uri, $basePath) === 0) {
        $uri = substr($uri, strlen($basePath));
    }

    $uri = rtrim($uri, '/') ?: '/';

    $method = strtoupper($requestMethod);

    var_dump($uri, $method, self::$routes);

    if (isset(self::$routes[$method][$uri])) {
        $action = self::$routes[$method][$uri];
        return self::runAction($action);
    }

    http_response_code(404);
    echo "404 Not Found";
}

    protected static function runAction($action)
    {
        [$controller, $method] = explode('@', $action);
        $controllerClass = "App\\Controllers\\$controller";

        if (class_exists($controllerClass)) {
            $controllerInstance = new $controllerClass;
            if (method_exists($controllerInstance, $method)) {
                return $controllerInstance->$method();
            }
        }

        http_response_code(500);
        echo "Controller or method not found.";
    }
}
