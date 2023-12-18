<?php

namespace App\Controller\Shop;

use App\App;
use App\Model\Shop;

class Category extends Shop
{
    public function drinks()
    {
        $food = $this->list('drinks');
        require dirname(__DIR__) . "/../../" . 'views/category/drinks.php';
    }

    public function foreign()
    {
        $food = $this->list('foreign');
        require dirname(__DIR__) . "/../../" . 'views/category/foreign.php';
    }

    public function local()
    {
        $food = $this->list('local');
        require dirname(__DIR__) . "/../../" . 'views/category/local.php';
    }

    public function snacks()
    {
        $food = $this->list('fast food');
        require dirname(__DIR__) . "/../../" . 'views/category/snacks.php';
    }
}
