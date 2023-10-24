<?php
declare(strict_types=1);


require 'User.php';
session_start();

if (!isset($_SESSION['name'])) {

    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $user = new User();
        $user->verifyUser(email: $email, password: $password);

    }
} else {
    header('Location: ../index.php');
}


?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/form_styles.css">
    <title>Login</title>
</head>

<body>

    <main>
        <div class="container-form">
            <form action="#" method="post" name="myForm">
                <div class="card">
                    <div class="card-head">
                        <h1 class="card-text" id="title">
                            Login in to your account
                        </h1>
                    </div>
                    <div class="card-body">
                        <legend>
                            <label for="email">
                                Email :
                                <input type="email" name="email" id="email" placeholder="Email">
                            </label>
                            <label for="password">Password :
                                <input type="password" name="password" id="password" placeholder="Password" autocomplete="none">
                            </label>
                            <input type="submit" value="Log in" id="submit" class="btn" onsubmit="validate()">
                        </legend>
                        <p class="register">
                            You don't have an account? <a href="signup.view.php">Create one</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>