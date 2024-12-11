<?php

namespace App\Controller\Shop;

use App\Model\Cart;

//@TODO change this controller and make it a appropriate MODEL

class CartController
{
    public function cart()
    {
        if ($_SERVER['REQUEST_METHOD'] === "POST") {
            $item = (new Cart())->addCartItem($_POST['id']);
            if ($item) {
                header("Location: {$_SERVER['HTTP_REFERER']}");
                return "success";
            }
            header("Location: {$_SERVER['HTTP_REFERER']}");
            return "failed";
        }
    }
}
