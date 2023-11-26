<?php

namespace App\Exception;

class RouteNotFoundException extends \Exception {
    protected $message = "Route not found";
}
