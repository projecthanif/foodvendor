<?php

namespace App\Controller\Auth;

use App\View;
use App\Model\Auth;

class LoginAuth extends Auth
{
    public function index()
    {
        if (isset($_SESSION['name'])) {
            return header('Location: /');
        }
        return view('validation.login');
    }

    public function login()
    {
        $this->verifyUser(post: $_POST);
    }
}
