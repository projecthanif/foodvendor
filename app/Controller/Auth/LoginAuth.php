<?php

namespace App\Controller\Auth;

use App\Model\User;

class LoginAuth extends User
{

    public function index()
    {
        if (isset($_SESSION['name'])) {
            return header('Location: /');
        }
        return require_once dirname(__DIR__) . '/../../' . '/views/validation/login.php';
    }

    public function login()
    {
        $response = $this->verifyUser($_POST['email'], $_POST['password']);

        if ($response) {
            header('Location: /');
        } else {
            sleep(2);
            header('Location: /auth/login');
        }
        
    }
}
