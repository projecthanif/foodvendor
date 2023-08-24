<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $name = $_POST['name'] ?? '';
    $lname = $_POST['lname'] ?? '';
    $email = $_POST['email'] ?? '';
    $number = $_POST['number'] ?? '';
    $password = $_POST['password'] ?? '';
    $submit = $_POST['submit'] ?? '';
    $Error = '';

    if (isset($submit)) {
        if (empty($name)) {
            $Error = "Name Required";
        } else {
            $name = $_POST['name'];

            if (!preg_match("/^['a-zA-Z']*$/", $name)) {
                $Error = "Only Letters and Whitespace allowed";
            } else {
            }
        }
        if (empty($lname)) {
            $Error = "Name Required";
        } else {
            $lname = $_POST['lname'];

            if (!preg_match("/^['a-zA-Z']*$/", $name)) {
                $Error = "Only Letters and Whitespace allowed";
            } else {
            }
        }
        if (empty($email)) {
            $Error = "Email required";
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $Error = "Valid Email required";
            } else {
            }
        }
        if (empty($number)) {
            $Error = "Phone Number Required";
        } else {
            $number = $_POST['number'];
            if (filter_var($number, FILTER_VALIDATE_INT)) {
                $Error = "Number required only";
            } else {
            }
        }
        if (empty($password)) {
            $Error = "Password Required";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
        }
    }

    require_once('../connection/connect.php');

    if (mysqli_connect_error()) {
        die('Connection Error');
    }
    $sql = "INSERT INTO users(user_fname,user_lname,user_email,user_password,user_number)
VALUE(?,?,?,?,?);";

    if (!empty($name && $lname && $email && $password && $number)) {

        $result = $conn->prepare($sql);
        $result->bind_param('sssss', $name, $lname, $email, $hash, $number);

        if ($result->execute()) {
            header("Location:user_login.php");
        } else {
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel='shortcut icon' href='../img/bowl.png' type='image/x-icon'>
    <title>Register</title>
</head>

<body>
    <style>
        .card {
            background-color: white;
            box-shadow: 0px 2px 10px 1px rgba(24, 87, 142, 0.5);
        }

        input.form-control {
            border-radius: 5px;
        }
    </style>

    <div class="container">
        <div class="d-flex justify-content-center mt-4">
            <div class="card p-5">
                <div class="card-body">
                    <form action="" method="post" class="form-inline">
                        <h5>Adventure starts here 🚀</h5><br>
                        <?php if (isset($Error)) : ?>
                            <div class='alert alert-secondary alert-dismissible'>
                                <div class='d-flex justify-content-between'>
                                    <p> <?= $Error ?> </p>
                                    <button type='button' data-bs-dismiss='alert' class='btn-close'></button>
                                </div>
                            </div>";
                        <?php endif ?>
                        <div class="card-inline">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="" class="form-control" placeholder="First Name" required>
                        </div>
                        <div class="card-inline">
                            <label for="name">Last Name</label>
                            <input type="text" name="lname" id="" class="form-control" placeholder="Last Name" required>
                        </div>
                        <div class="card-inline">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="card-inline">
                            <label for="number">Number</label>
                            <input type="" name="number" id="" class="form-control" placeholder="Your Number" required>
                        </div>
                        <div class="card-inline">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="" placeholder="Your Password" required>
                        </div><br>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Register" name="submit" class="form-control bg-danger" style="width:70%">
                        </div><br>
                        <div class="d-flex justify-content-end">
                            <h6>Already have an account?<a href="./user_login.php" class="card-link" style="text-decoration:none;"> Sign in instead</a></h6>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>