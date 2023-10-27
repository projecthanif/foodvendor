<?php
require_once('get_list.php');

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
            <section class="link">
                <h4 class="links">
                    <a href="../index.php" class="nav-link"> Home </a>
                    <p> > </p>
                    <a href="cart.php" class="nav-link"> Cart</a>
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
                    <section class="cart box">
                        <h3 class="cart box title">Shopping Cart</h3>
                        <div class="cart container">
                            <div class="cart table">
                                <table>
                                    <thead>
                                        <th class="th-first">Items</th>
                                        <!-- <th class="th-second">Quantity</th> -->
                                        <th class="th-third">Price</th>
                                        <th class="th-fourth"></th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($lists as $list) :
                                            $name = $list['product_name'];
                                            $price = $list['price'];
                                        ?>
                                            <tr>
                                                <td><?= $name ?></td>
                                                <!-- <td>1</td> -->
                                                <td><del>N</del><?= $price ?></td>
                                                <td></td>
                                            </tr>
                                        <?php
                                        endforeach
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart summary">
                                <h2 class="s-title">Order Summary</h2>
                                <hr>
                                <div class="order-price">
                                    <div class="type-price">
                                        <h5 class="name">
                                            Item (<?= $count ?>)
                                        </h5>
                                        <p class="price">
                                            <del>N</del> <?= $total ?>
                                        </p>
                                    </div>
                                    <div class="type-price">
                                        <h5 class="name">
                                            Discount
                                        </h5>
                                        <p class="price">
                                            <del>N</del> 0
                                        </p>
                                    </div>
                                    <div class="type-price">
                                        <h5 class="name">
                                            Subtotal
                                        </h5>
                                        <p class="price">
                                            <del>N</del> <?= $total ?>
                                        </p>
                                    </div>
                                    <div class="type-price two">
                                        <h5 class="name">
                                            Estimated Delivery
                                        </h5>
                                        <p class="price">
                                            <del>N</del> 0
                                        </p>
                                    </div>
                                    <div class="type-price">
                                        <h5 class="name">
                                            Estimated Tax
                                        </h5>
                                        <p class="price">
                                            <del>N</del> 0
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <div class="amount-total">
                                    <h1 class="title">Order Value</h1>
                                    <p class="price">
                                        <del>N</del> <?= $total ?>
                                    </p>
                                </div>
                                <button class="btn-check">Checkout</button>
                            </div>
                        </div>
                    </section>
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
else :  header('Location: ../validation/login.php');
endif;
?>