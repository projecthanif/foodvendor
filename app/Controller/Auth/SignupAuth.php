<?php

namespace App\Controller\Auth;

use App\Model\User;

class SignupAuth extends User
{
    public function index()
    {
        return require_once dirname(__DIR__) . '/../../' . '/views/validation/signup.php';
    }

    public function signup()
    {
        $response = $this->userRegister(
            $_POST['name'],
            $_POST['email'],
            $_POST['number'],
            $_POST['password']
        );

        if ($response) {
            header("Location: /auth/login");
        }
    }
}
