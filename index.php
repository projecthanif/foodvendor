<?php
// include_once('connection/connect.php')
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <meta name='Description' content='Enter your description here' />
    <link rel="import" href="bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/litera/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1/dist/css/bootstrap.rtl.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1/dist/css/bootstrap.rtl.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1/dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap-5.3.0-alpha1/dist/css/bootstrap-utilities.css">
    <link rel="shortcut icon" href="img/bowl.png" type="image/x-icon">
    <link rel='stylesheet' href='css/style.css'>
    <title>Shopping vendor</title>
</head>

<body>
    <style>
        body {
            font-family: monospace;
        }
    </style>

    <section>
        <!-- <div class="container-fluid bg-light ">
            <div class="container-fluid ">
                <nav class="navbar navbar-expand-sm justify-content-between">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <div class="nav-brand">
                                <img src="./img/bowl.png" alt="">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <?php require_once('link.php') ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> -->
        <div class="container-fluid index-head p-5">
            <div class="container p-2">
                <nav class="navbar navbar-expand-sm bg-secondary navbar-light p-2 justify-content-between">
                    <ul class="navbar-nav">
                        <a href="index.php" class="nav-link"><img src="img/bowl.png" alt=""
                                class="img-fluid img-logo"></a>
                    </ul>
                    <ul class="navbar-nav">
                    <li class="nav-item">
                            <a href="validation/user_login.php" class="nav-link">
                                <span class="fs-3 text-dark"><i class="fa fa-user"></i>
                                    <?php ?>
                                </span>
                            </a>
                        </li>
                        <li class="navbar-item mx-3">
                            <a href="#" class="nav-link">
                                <span class="fs-3 text-dark"><i class="fa fa-shopping-cart"></i> Cart</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="container text-center">
                <h3 class="display-3 text-light">
                    Delicious Food
                </h3>
                <p class="text-light fs-4">
                    Deliver to your door step
                </p>
            </div>
        </div>
        <!-- #Navigation bar -->

        <!-- #Navigation ends here -->

        <!---- Jumbotron start here ------>

        <!-- Ends here-->
    </section>
    <section>
        <div class="container-fluid bg-light">
            <div class="container p-5 text-center">
                <div class="container p-1 text-center">
                    <h3 class="display-6">
                        NEW <strong>ARRIVALS</strong>
                    </h3>
                    <p class="text-warning">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    </p>
                </div>
                <div class="container p-5">
                    <div class="row d-flex flex-row justify-content-center">
                        <div class="col">
                            <a href="shop.php" class="nav-link">
                                <i class="fa fa-bowl-food fa-2x"></i>
                                <p class="fs-5">All Product</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="category/drinks.php" class="nav-link">
                                <i class="fas fa-glass-cheers fa-2x"></i>
                                <p class="fs-5">Drinks</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="category/fast.php" class="nav-link">
                                <i class="fas fa-cookie-bite fa-2x"></i>
                                <p class="fs-5">Fast Food</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="category/local.php" class="nav-link">
                                <i class="fas fa-bowl-rice fa-2x"></i>
                                <p class="fs-5">Local Food</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="category/foreign.php" class="nav-link">
                                <i class="fas fa-cookie-bite fa-2x"></i>
                                <p class="fs-5">Foreign Food</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------Footer Starts Here-------------->
    <div class="container-fluid bg-light">
        <hr>
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-sm-4">
                    <h6>Newsletter</h6>
                    <p>Subscribe to get information about our food</p>
                </div>
                <div class="col-sm-8">
                    <form action="../email.php" method="post" class="form">
                        <div class="input-group">
                            <input type="text" name="email" id="" class="form-control">
                            <button type="submit" class="input-group-text"><i class="fa fa-envelope"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <p>Follow us on</p>
        <a href='https://twitter.com/offixial_hanif' style='color:black'><i class='fa-brands fa-twitter fa-2x'></i></a>
        <a href='https://www.instagram.com/offixial_hanif/' style='color:black'><i
                class='fa-brands fa-instagram fa-2x'></i></a>
        <a href='https://wa.me/23409061887329' style='color:black'><i class='fa-brands fa-whatsapp fa-2x'></i></a>
        <hr>
    </div>




    <script src="bootstrap-5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-5.3.0-alpha1/dist/js/bootstrap.js"></script>
    <script src="bootstrap-5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js'></script>
</body>

</html>