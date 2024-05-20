<?php

namespace App\Controller\Shop;

use App\App;
use App\Model\Shop;
use App\View;

class Category extends Shop
{
    public function drinks()
    {
        // $food = $this->fetchList('drinks');

        return view('category.drinks');
    }

    public function foreign()
    {
        $food = $this->fetchList('foreign');

        return view('category.foreign');
    }

    public function local()
    {
        $food = $this->fetchList('local');

        return view('category.local');
    }

    public function snacks()
    {
        $food = $this->fetchList('fast food');

        return view('category.snacks');
    }
}
