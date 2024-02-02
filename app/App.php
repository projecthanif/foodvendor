<?php

namespace App;

use App\Exception\RouteNotFoundException;
use App\Router\Router;


class App
{

    
    private static \mysqli|bool $conn;

    public function __construct(
        protected Router $route,
        protected array $request,
        protected array $config
    ) {
        App::$conn = (new DB($config))->conn();
    }

    public function run()
    {
        try {
            $this->route->resolve(
                $this->request['uri'],
                strtolower($this->request['method'])
            );
        } catch (RouteNotFoundException $e) {
            echo $e->getMessage();
        }
    }

    public static function db()
    {
        return App::$conn;
    }
}
