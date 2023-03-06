<?php
require_once('../connection/connect.php');
session_start();
$name = $_POST['name'] ?? '';
$password = $_POST['password'] ?? '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sql = "SELECT * FROM users
    WHERE user_email='$name';";
    $result = $conn->query($sql);
    $out = $result->fetch_assoc();
    if ($out == true) {
        $hash = $out['user_password'];
        $verify = password_verify($password, $hash);
        if ($verify) {
            $_SESSION['lname'] = $out['user_lname'];
            $_SESSION['type'] = $out['type'];
            $_SESSION['name'] = $out['user_fname'];
            header('Location: ../index.php');
            exit;
        } else {
            header('Location:user_login.php');
        }
    } else {
        header('Location: user_login.php');
        $Error = 'Invalid Password';
    }
} else {
    header('Location: user_login.php');

}
?>