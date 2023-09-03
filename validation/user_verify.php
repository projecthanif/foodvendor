<?php
require_once('../connection/connect.php');
session_start();

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    $result = $conn->query("SELECT * FROM users WHERE user_email='$email'");

    while (mysqli_num_rows($result) > 0) {
        $out = $result->fetch_assoc();


        $hash = $out['user_password'];
        $verify = password_verify($password, $hash);

        if ($verify) {

            $_SESSION['lname'] = $out['user_lname'];
            $_SESSION['type'] = $out['type'];
            $_SESSION['name'] = $out['user_fname'];
            dd($_SESSION);
            header('Location:../index.html');

        } else {
            header('Location:user_login.php');
        }
    }
} else {
    header('Location: user_login.php');
}


function dd($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    exit;
}
