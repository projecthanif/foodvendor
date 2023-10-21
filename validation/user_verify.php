<?php
require('../connection/connect.php');
session_start();

if (!isset($_SESSION['name'])) {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        $result = $conn->query("SELECT * FROM users WHERE userMail='$email'");

        if (mysqli_num_rows($result) === 1) {
            $out = $result->fetch_assoc();

            $hash = $out['userPassword'];
            $verify = password_verify($password, $hash);
            // dd($verify);
            if ($verify) {

                $_SESSION['type'] = $out['UserType'];
                $_SESSION['name'] = $out['userName'];
                $_SESSION['id'] = $out['userId'];

                // $referer = $_POST['referer'];
                
                header("Location: ../index.php");
            } else {
                sleep(3);
                header('Location: user_login.php');
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
