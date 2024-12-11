<?php

namespace App\Controller\Shop;

use App\Model\Shop;
use App\View;

class ShopController extends Shop
{
    public function index()
    {
        // $food = $this->fetchList();
        return view('shop');
    }
}
