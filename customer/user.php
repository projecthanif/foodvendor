<?php

session_start();


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
                    <a href="user.php" class="nav-link" active>Overview</a>
                    <a href="cart.php" class="nav-link">Orders</a>
                    <a href="#" class="nav-link">Payment</a>
                    <a href="#" class="nav-link">Feedback</a>
                    <a href="#" class="nav-link">Settings</a>
                    <a href="address.php" class="nav-link">Shipping Address</a>
                </aside>
                <section class="section body">
                    <article class="user_info">
                        <div class="user">
                            <h1 class="img"><?= strtoupper($_SESSION['name'][0]) ?></h1>
                            <h3 class="user_name"> <?= $_SESSION['name'] ?></h3>
                        </div>
                    </article>
                    <article class="order section">
                        <div class="order title">
                            <h4 class="title">My Orders</h4>
                            <a href="cart.php" class="order-link">View All > </a>
                        </div>
                    </article>
                </section>
            </section>
        </main>
        <footer>
            <div class="footer-container">
                <div class="footer-item">
                    <h5 class="ft-5 yellow ft">Information</h5>
                    <ul class="foot-item">
                        <li>
                            <a href="#">Specials</a>
                        </li>
                        <li>
                            <a href="#">New Products</a>
                        </li>
                        <li>
                            <a href="#">Best Selling</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                        <li>
                            <a href="#">About Us</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h5 class="ft-5 yellow ft">My Account</h5>
                    <ul class="foot-item">
                        <li>
                            <a href="#">My Orders</a>
                        </li>
                        <li>
                            <a href="#">My Address</a>
                        </li>
                        <li>
                            <a href="#">My Credit Slip</a>
                        </li>
                        <li>
                            <a href="#">My Personal Info</a>
                        </li>
                        <li>
                            <a href="#">My Voucher</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h5 class="ft-5 yellow ft">Follow Us</h5>
                    <ul class="foot-item">
                        <li>
                            <a href="https://twitter.com/projecthanif/" target="_blank">
                                <i class="fa-brands fa-square-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-square-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/mustapha-ibrahim-945204262/" target="_blank">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h5 class="ft-5 yellow ft">Store Information</h5>
                    <h5 class="ft-5 yellow"> CALL US NOW: 09112607445</h5>
                </div>
            </div>
        </footer>

        <script src="../assets/js/app.js"></script>
    </body>

    </html>
<?php
else :
    header(("Location: ../validation/login.php"));
endif;
?>