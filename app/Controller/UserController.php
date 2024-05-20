<?php

namespace App\Controller;

use App\App;
use App\Model\Cart;
use App\Model\Address;
use App\View;

class UserController
{
    public function __construct()
    {
        if (empty($_SESSION)) {
            header('Location: /auth/login');
            exit;
        }
    }
    public function view()
    {
        return view('user.user');
    }

    public function address()
    {
        $user = (new Address())->getAddress();
        view('user.address');
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
        return view('user.cart');
    }

    public function payment()
    {
    }
}
