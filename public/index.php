<?php

declare(strict_types=1);
global $route;

use App\Core\App;
use App\Config\Database;

define('VIEW_PATH', __DIR__ . '\..\views\\');

session_start();

include_once __DIR__ . "/../" . "/vendor/autoload.php";
include_once __DIR__ . '/../helper.php';
include_once __DIR__ . '/../route/route.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();


$request  = [
    'uri' => $_SERVER['REQUEST_URI'],
    'method' => $_SERVER['REQUEST_METHOD']
];

(new App($route, $request, $_ENV))->run();
