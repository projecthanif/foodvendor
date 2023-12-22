<?php

namespace App\Controller;

use App\App;
use App\Model\Cart;
use App\Model\Address;

class UserController
{
    public function view()
    {
        if (empty($_SESSION)) {
            return header('Location: /auth/login');
        }
        require dirname(__DIR__) . "/../" . 'views/user/user.php';
    }

    public function address()
    {
        if (empty($_SESSION)) {
            return header('Location: /auth/login');
        }
        $user = (new Address())->getAddress();
        
        require dirname(__DIR__) . "/../" . 'views/user/address.php';
    }

    public function cart()
    {
        if (empty($_SESSION)) {
            return header('Location: /auth/login');
        }
        $array = (new Cart())->getCartItems();
        $lists = $array[0];
        $count = count($lists);
        $total = $array[1];
        $discount = $array[2];
        $subtotal = $total - $discount;
        $sumtotal = $subtotal;

        require dirname(__DIR__) . "/../" . 'views/user/cart.php';
    }

    public function payment()
    {
        
    }
}
