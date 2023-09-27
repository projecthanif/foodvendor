<?php
require('../connection/connect.php');
session_start();

if (!isset($_SESSION['name'])) {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $result = $conn->query("SELECT * FROM users WHERE user_email='$email'");

        if (mysqli_num_rows($result) === 1) {
            $out = $result->fetch_assoc();

            $hash = $out['user_password'];
            $verify = password_verify($password, $hash);
            // dd($hash);
            if ($verify) {

                $_SESSION['type'] = $out['type'];
                $_SESSION['name'] = $out['user_fname'];
                $_SESSION['id'] = $out['userid'];

                // $referer = $_POST['referer'];
                
                
                header("Location: ../index.php");
            } else {
                echo "failed";
                // header('Location: user_login.php');
            }
        }
    } else {
        header('Location: user_login.php');
    }
} else {
    header('Location: ../index.php');
}
function dd($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    exit;
}
