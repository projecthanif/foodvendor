<?php

namespace App\Controller\Shop;

use App\App;
use App\Model\Shop;

class Category extends Shop
{
    public function drinks()
    {
        $food = $this->fetchList('drinks');
        require dirname(__DIR__) . "/../../" . 'views/category/drinks.php';
    }

    public function foreign()
    {
        $food = $this->fetchList('foreign');
        require dirname(__DIR__) . "/../../" . 'views/category/foreign.php';
    }

    public function local()
    {
        $food = $this->fetchList('local');
        require dirname(__DIR__) . "/../../" . 'views/category/local.php';
    }

    public function snacks()
    {
        $food = $this->fetchList('fast food');
        require dirname(__DIR__) . "/../../" . 'views/category/snacks.php';
    }
}
