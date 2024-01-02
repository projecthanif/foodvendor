<?php

namespace App;

final class View
{

    public static function view(string $path)
    {

        return match ($path) {
            'index' => require_once VIEW_PATH . '/index.php',
            'login' => require_once VIEW_PATH . '/validation/login.php',
            'signup' => require_once VIEW_PATH . '/validation/signup.php',
            'store' => VIEW_PATH . '/shop.php',
            'store/foreign' => VIEW_PATH . '/category/foreign.php',
            'store/local' => VIEW_PATH . '/category/local.php',
            'store/drinks' => VIEW_PATH . '/category/drinks.php',
            'store/snacks' => VIEW_PATH . '/category/snacks.php',
            'user' => require_once VIEW_PATH . '/user/user.php',
            'user/address' =>  VIEW_PATH . '/user/address.php',
            'user/cart' =>  VIEW_PATH . '/user/cart.php',
            default => VIEW_PATH . '/index.php'
        };
    }
}
