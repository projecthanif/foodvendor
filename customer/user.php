<?php

session_start();
require('../connection/connect.php');
require('../function.php');

if (isset($_SESSION['name'])) :

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="../assets/css/style.css" />
        <link rel="stylesheet" href="../assets/css/cstyles.css">
        <link rel="shortcut icon" href="../assets/img/bowl.png" type="image/x-icon" />
        <title>Food Vendor</title>
    </head>

    <body>
        <nav id="nav" class="navbar-large">
            <a href="../index.php">
                <img src="../assets/img/bowl.png" alt="" class="nav-brand" />
            </a>
            <button class="btn-nav" id="navToggle" onclick="showNav()">
                <i class="fa fa-bars fa-2x"></i>
            </button>
            <ul class="navbar" id="navbar">
                <li class="nav-item">
                    <form action="#" class="form">
                        <label for="search">
                            <input type="text" class="form-input" placeholder="Search" name="search" />
                            <button class="btn-form">
                                <i class="fa fa-search"></i>
                            </button>
                        </label>
                    </form>
                </li>
                <button class="btn-nav" id="close" onclick="closeNav()">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </ul>
            <ul class="navbar list">
                <li class="nav-item">
                    <a href="user.php" class="nav-link">
                        <i class="fa-regular fa-user fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fa-regular fa-heart fa-2x"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cart.php" class="nav-link">
                        <i class="fa fa-bag-shopping fa-2x"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <main>
            <section class="link">
                <h4 class="links">
                    <a href="../index.php" class="nav-link"> Home </a>
                    <p> > </p>
                    <a href="user.php" class="nav-link"> Account</a>
                </h4>
            </section>
            <section class="body">
                <aside class="aside">
                    <h4 class="nav-title">Account</h4>
                    <a href="#" class="nav-link" active>Overview</a>
                    <a href="#" class="nav-link">Orders</a>
                    <a href="#" class="nav-link">Payment</a>
                    <a href="#" class="nav-link">Feedback</a>
                    <a href="#" class="nav-link">Settings</a>
                    <a href="#" class="nav-link">Shipping Address</a>
                </aside>
                <section class="section body">
                    <article class="user_info">
                        <div class="user">
                            <h1 class="img"><?= $_SESSION['name'][0] ?></h1>
                            <h3 class="user_name"> <?= $_SESSION['name'] ?></h3>
                        </div>
                    </article>
                    <article class="order section">
                        <div class="order title">
                            <h4 class="title">My Orders</h4>
                            <a href="#" class="order-link">View All > </a>
                        </div>                        
                    </article>
                </section>
            </section>
        </main>

        <script src="../assets/js/app.js"></script>
    </body>

    </html>
<?php
else :
    header(("Location: ../validation/login.php"));
endif;
?>