<?php

namespace App\Controller;

use App\View;

class IndexController {

    public function index()
    {
        View::view('index');
    }
}