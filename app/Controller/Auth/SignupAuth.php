<?php

namespace App\Controller\Auth;

use App\Model\Auth;

class SignupAuth extends Auth
{
    public function index()
    {
        if (isset($_SESSION['name'])) {
            return header('Location: /');
        }
        return require_once dirname(__DIR__) . '/../../' . '/views/validation/signup.php';
    }

    public function signup()
    {
        $response = $this->userRegister(post: $_POST);

        if ($response) {
            header("Location: /auth/login");
        }
    }
}
