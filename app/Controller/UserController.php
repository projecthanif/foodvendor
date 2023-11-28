<?php

namespace App\Controller;

use App\App;
use App\Model\Cart;

class UserController
{
    public function __construct()
    {
        if (empty($_SESSION)) {
            header("Location: /auth/login");
        }
    }
    public function view()
    {
        require dirname(__DIR__) . "/../" . 'views/user/user.php';
    }

    public function address()
    {
        $user = (new \App\Model\Address())->getAddress();
        require dirname(__DIR__) . "/../" . 'views/user/address.php';
    }

    public function cart()
    {
        $array = (new Cart())->getCartItems();
        $lists = $array[0];
        $count = count($lists);
        $total = $array[1];
        $discount = $array[2];
        $subtotal = $total - $discount;
        $sumtotal = $subtotal;
        require dirname(__DIR__) . "/../" . 'views/user/cart.php';
    }
}
