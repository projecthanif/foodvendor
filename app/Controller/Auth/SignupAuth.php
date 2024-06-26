<?php

namespace App\Controller\Auth;

use App\Model\Auth;
use App\View;

class SignupAuth extends Auth
{
    public function index()
    {
        if (isset($_SESSION['name'])) {
            return header('Location: /');
        }
        return view('validation.signup');
    }

    public function signup()
    {
        $this->userRegister(post: $_POST);
    }
}
