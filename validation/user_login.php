<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/litera/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- css -->
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.rtl.min.css">
    <link rel='shortcut icon' href='../img/bowl.png' type='image/x-icon'>
    <title>Login</title>
</head>

<body>
    <style>
        .card {
            background-color: white;
            box-shadow: 0px 2px 10px 1px rgba(24, 87, 142, 0.5);
        }
    </style>
    <div class="container ">
        <div class="d-flex justify-content-center mt-5">
            <div class="card p-5" style="border-radius:5px;">
                <div class="card-body">
                    <form action="user_verify.php" method="post" class="form">

                        <div class="card-head" style="text-align:start">
                            <h1 style="text-align:center">Code Chef 👨‍🍳</h1><br>
                            <div class="card-text">Welcome to CodeChef 👨‍💻</div>
                            <p class="text-justify">Please sign-in to your account and start the adventure</p>
                        </div>
                        <?php
                        if (isset($Error)) {
                            echo "<div class='alert alert-secondary alert-dismissible'>
                                <div class='d-flex justify-content-between'>" . $Error . "<button type='button' data-bs-dismiss='alert' class='btn-close'></button>
                                </div>
                                </div>";
                        }
                        ?>
                        <div class="card-inline">
                            <label for="name">Email</label>
                            <input type="email" name="name" id="" class="form-control" required
                                style="border-radius:5px;" placeholder="Enter your Email">
                        </div><br>
                        <div class="card-inline mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="" class="form-control" required
                                style="border-radius:5px" placeholder="**********">
                        </div>
                        <div class="d-flex justify-content-center">
                            <input type="submit" value="Sign in" class="btn bg-info form-control"
                                style="border-radius:5px; width:90%; color:white">
                        </div><br>
                        <p style="text-align:center">New on our store<a href="./user_Register.php" class="link" style="text-decoration:none;"> Create
                                new
                                Account</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="bootstrap-5.2.3-dist/js/bootstrap.js"></script>
    <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>

</html>