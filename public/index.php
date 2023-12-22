<?php

declare(strict_types=1);


use App\App;
use App\Controller\Admin\AdminController;
use App\Router\Router;
use App\Controller\Shop\Category;
use App\Controller\UserController;
use App\Controller\IndexController;
use App\Controller\Shop\ShopController;
use App\Controller\Auth\LoginAuth;
use App\Controller\Auth\SignupAuth;
use App\Controller\Shop\CartController;


session_start();

include_once __DIR__ . "/../" . "/vendor/autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . "/../");
$dotenv->load();

$route = new Router();



$route
    ->get('/', [IndexController::class, 'index'])

    ->get('/shop', [ShopController::class, 'index'])
    ->get('/shop/drinks', [Category::class, 'drinks'])
    ->get('/shop/local', [Category::class, 'local'])
    ->get('/shop/foreign', [Category::class, 'foreign'])
    ->get('/shop/snacks', [Category::class, 'snacks'])

    ->post('/shop/cart', [CartController::class, 'cart'])

    ->get('/user', [UserController::class, 'view'])
    ->get('/user/address', [UserController::class, 'address'])
    // ->post('/user/address', [UserController::class, 'setAddress'])
    ->get('/user/cart', [UserController::class, 'cart'])
    // ->post('/user/cart', [UserController::class, 'checkOut'])
    // ->get('/user/cart', [UserController::class, 'payment'])

    ->get('/auth/login', [LoginAuth::class, 'index'])
    ->post('/auth/login', [LoginAuth::class, 'login'])
    ->get('/auth/signup', [SignupAuth::class, 'index'])
    ->post('/auth/signup', [SignupAuth::class, 'signup'])

    // ADMIN SECTION

    ->get('/admin/dashboard',  [AdminController::class, 'view'])
    ->get('/admin/customer',  [AdminController::class, 'customerView'])
    ->get('/admin/orders',  [AdminController::class, 'orderView'])
    ->get('/admin/store',  [AdminController::class, 'storeView'])
    ->post('/admin/store/create',  [AdminController::class, 'createItem']);

// session_destroy();

(new App(
    $route,
    [
        'uri' => $_SERVER['REQUEST_URI'],
        'method' => $_SERVER['REQUEST_METHOD']
    ],
    $_ENV
))->run();


function dd(...$var)
{
    echo "<pre>";
    var_dump($var);
    echo "</pre>";
}

function ddd(...$var)
{
    dd(...$var);
    exit;
}
