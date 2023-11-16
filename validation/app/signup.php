<?php

require_once(dirname(__FILE__) . '/User.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $number = $_POST['number'] ?? '';
    $password = $_POST['password'] ?? '';
    $submit = $_POST['submit'] ?? '';
    
    $user = new User();
    
    if (isset($submit)) {
        if ($name && $email && $number && $password) {
            $user->userRegister($name, $email, $number, $password);
        }
    }
}
