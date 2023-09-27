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
        <link rel="stylesheet" href="../assets/css/cstyles.css" />
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
                            <input type="text" class="form-input" placeholder="Search" />
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
                <li class="nav-item" title="<?= $_SESSION['name'] ?>">
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
            <section class="cart box">
                <article class="cart-title">
                    <h3 class="title">Shopping Cart</h3>
                </article>
            </section>
        </main>
        <script src="../assets/js/app.js"></script>
    </body>

    </html>


<?php
else :  header('Location: ../validation/user_login.php');
endif;
?>