<?php

namespace App\Controller;
class IndexController {

    public function index()
    {
        require dirname(__DIR__) . "/../" . 'views/index.php';
    }
}