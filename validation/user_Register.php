<?php

require 'User.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $number = $_POST['number'] ?? '';
    $password = $_POST['password'] ?? '';
    $submit = $_POST['submit'] ?? '';

    $user = new User($name, $email, $number, $password);

    $user->validateString();
    $user->validateEmail();
    $user->validateInt();
    $user->hash();

    $user->userRegister();
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/form_styles.css">
    <title>Register</title>
</head>

<body>

    <main>
        <div class="container-form">
            <form action="#" method="post" name="myForm">
                <div class="card">
                    <div class="card-head">
                        <h2 class="card-text" id="title">
                            Register
                        </h2>
                    </div>
                    <div class="card-body">
                        <legend>
                            <label for="name">
                                Name :
                                <input type="text" name="name" id="text" placeholder="Enter your Name">
                                <p id="response" style="display: none;"> </p>
                            </label>
                            <label for="number">Number :
                                <input type="number" name="number" id="number" placeholder="Enter your Number">
                            </label>
                            <label for="email">
                                Email :
                                <input type="email" name="email" id="email" placeholder="Input Email">
                            </label>
                            <label for="password">Password :
                                <input type="password" name="password" id="password" placeholder="Password" autocomplete="none">
                            </label>
                            <input type="submit" value="Register" id="submit" class="btn" onsubmit="validate()">
                        </legend>
                        <p class="register">
                            You have an account no worries you can login <a href="user_login.php">here</a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </main>
</body>

</html>