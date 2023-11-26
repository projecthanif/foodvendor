<?php

namespace App\Controller\Shop;

use App\App;


class ShopController extends Shop {

    
    public function index()
    {
        $food = $this->list();
        require dirname(__DIR__) . "/../../" . 'views/shop.php';
    }

    
}