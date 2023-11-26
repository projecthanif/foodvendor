<?php

namespace App\Controller;

class UserController {

    public function __construct() {
        if (empty($_SESSION)) {
            header("Location: /auth/login");
        }
    }
    public function view() {
        require dirname(__DIR__) . "/../" . 'views/user/user.php';
    }

    public function address() {
        require dirname(__DIR__) . "/../" . 'views/user/address.php';
    }

    public function cart() {
        require dirname(__DIR__) . "/../" . 'views/user/cart.php';
    }

    public function get_cart_list() {
        
    }
}