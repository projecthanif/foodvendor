<?php

namespace App\Controller\Shop;

use App\App;
use App\Model\Shop;
use App\View;

class Category extends Shop
{
    public function drinks()
    {
        $food = $this->fetchList('drinks');
        require_once View::view('store/drinks');
    }

    public function foreign()
    {
        $food = $this->fetchList('foreign');
        require_once View::view('store/foreign');
    }

    public function local()
    {
        $food = $this->fetchList('local');
        require_once View::view('store/local');
    }

    public function snacks()
    {
        $food = $this->fetchList('fast food');
        require_once View::view('store/snacks');
    }
}
