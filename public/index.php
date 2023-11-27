<?php
declare(strict_types=1);

use App\App;
use App\Router\Routes;
use App\Controller\Shop\Category;
use App\Controller\UserController;
use App\Controller\IndexController;
use App\Controller\Shop\ShopController;
use App\Controller\Auth\LoginAuth;
use App\Controller\Auth\SignupAuth;

session_start();


spl_autoload_register(function ($class) {
    $path = str_replace("\\", "/", dirname(__DIR__) . '/' . lcfirst($class)) . ".php";
    require $path;
});


$route = new Routes();



$route
    ->get('/', [IndexController::class, 'index'])

    ->get('/shop', [ShopController::class, 'index'])
    ->get('/shop/drinks', [Category::class, 'drinks'])
    ->get('/shop/local', [Category::class, 'local'])
    ->get('/shop/foreign', [Category::class, 'foreign'])
    ->get('/shop/snacks', [Category::class, 'snacks'])

    ->get('/user', [UserController::class, 'view'])
    ->get('/user/address', [UserController::class, 'address'])
    ->get('/user/cart', [UserController::class, 'cart'])

    ->get('/auth/login', [LoginAuth::class, 'index'])
    ->post('/auth/login', [LoginAuth::class, 'login'])
    ->get('/auth/signup', [SignupAuth::class, 'index'])
    ->post('/auth/signup', [SignupAuth::class, 'signup']);


(new App(
    $route,
    [
        'uri' => $_SERVER['REQUEST_URI'],
        'method' => $_SERVER['REQUEST_METHOD']
    ],
    [
        'hostname' => 'localhost',
        'username' => 'root',
        'password' => '',
        'dbname' => 'foodvendor'
    ]
))->run();


function dd(...$var) {
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function ddd(...$var) {
    dd(...$var);
    exit;
}