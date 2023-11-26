<?php

namespace App\Router;

use App\Exception\RouteNotFoundException;

class Routes
{
    private array $router;

    private function register(
        string $requestMethod,
        string $route,
        callable|array $action
    ): Routes {
        $this->router[$route][$requestMethod] = $action;
        return $this;
    }

    public function get(string $uri, callable|array $action): Routes
    {
        return $this->register('get', $uri, $action);
    }

    public function post(string $uri, callable|array $action): Routes
    {
        return $this->register('post', $uri, $action);
    }

    public function resolve(string $route, string $requestMethod)
    {
        $action = $this->router[$route][$requestMethod] ?? null;

        if (!$action) {
            return throw new RouteNotFoundException;
        }

        if (is_callable($action)) {
            call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $action] = $action;

            if (class_exists($class)) {
                $class = new $class;
                if (method_exists($class, $action)) {
                   return call_user_func_array([$class, $action], []);
                }
            }
        }

        return throw new RouteNotFoundException;
    }
}
