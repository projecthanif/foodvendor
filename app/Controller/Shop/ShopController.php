<?php

namespace App\Controller\Shop;

use App\App;
use App\Model\Shop;


class ShopController extends Shop {

    
    public function index()
    {
        $food = $this->list();
        require dirname(__DIR__) . "/../../" . 'views/shop.php';
    }

    
}