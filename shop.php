<?php

// session_start();
include('connection/connect.php');
include('function.php');

$orderId = $_REQUEST['productId'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  echo $orderId;

  // dd($orderId);
}


// dd($_SESSION);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="shortcut icon" href="assets/img/bowl.png" type="image/x-icon" />
  <title>Food Vendor</title>
</head>

<body>
  <nav id="nav" class="navbar-large">
    <a href="index.html">
      <img src="assets/img/bowl.png" alt="" class="nav-brand" />
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
      <li class="nav-item">
        <a href="validation/user_login.php" class="nav-link">
          <i class="fa-regular fa-user fa-2x"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa-regular fa-heart fa-2x"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-bag-shopping fa-2x"></i>
        </a>
      </li>
    </ul>
  </nav>
  <main>
    <section class="catalog-section">
      <div class="catalog-title">
        <h5 class="ft-5 b">Catalog Section</h5>
      </div>
      <div class="select">
        <a href="#foreign">
          <button class="btn select">
            <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
            Foreign Delicacies
          </button>
        </a>
        <a href="#local">
          <button class="btn select">
            <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
            Local Delicacies
          </button>
        </a>
        <a href="#drink">
          <button class="btn select">
            <img src="assets/img/cream.jpeg" alt="" class="btn-img" />
            Fresh Drink
          </button>
        </a>
        <a href="#snacks">
          <button class="btn select">
            <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
            Fast Food
          </button>
        </a>
      </div>
      <div class="catalog-item" id="food">
        <div class="catalog-title" id="foreign">
          <h5 class="ft-5 b">Foreign <i class="yellow"> Delicacies </i></h5>
          <a href="category/foreign.php">
            <button class="btn order more">See More</button>
          </a>
        </div>
        <div class="card-section">
          <div class="flex-container">
            <!-- PHP -->
            <?php

            $request = $conn->query("SELECT * FROM item_order LIMIT 10 "); //WHERE item_type = 'Local Delicacies'

            if (mysqli_num_rows($request) > 0) :
              while ($item = $request->fetch_assoc()) :
                $name = $item['item_Name'];
                $price = $item['item_Price'];
                $productId = $item['productid'];
            ?>
                <div class="flex-item">
                  <div class="card">
                    <div class="card-img">
                      <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                    </div>
                    <div class="card-body">
                      <div class="card-body-title"><?= $name ?></div>
                      <div class="card-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                    <div class="card-foot">
                      <div class="card-price"><del>N</del> <?= $price ?></div>
                      <?php

                      ?>
                      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="hidden" name="productId" value="<?= $productId ?>">
                        <button class="cart-img">
                          <i class="fa fa-bag-shopping"></i>
                        </button>
                      </form>
                      <?php
                      ?>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
        <div class="catalog-title" id="local">
          <h5 class="ft-5 b">Local <i class="yellow"> Delicacies </i></h5>
          <a href="category/local.php">
            <button class="btn order more">See More</button>
          </a>
        </div>
        <div class="card-section">
          <div class="flex-container">
            <!-- PHP -->
            <?php

            $request = $conn->query("SELECT * FROM item_order LIMIT 10 "); //WHERE item_type = 'Local Delicacies'

            if (mysqli_num_rows($request) > 0) :
              while ($item = $request->fetch_assoc()) :
                $name = $item['item_Name'];
                $price = $item['item_Price'];
                $productId = $item['productid'];
            ?>
                <div class="flex-item">
                  <div class="card">
                    <div class="card-img">
                      <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                    </div>
                    <div class="card-body">
                      <div class="card-body-title"><?= $name ?></div>
                      <div class="card-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                    <div class="card-foot">
                      <div class="card-price"><del>N</del> <?= $price ?></div>
                      <?php

                      ?>
                      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="hidden" name="productId" value="<?= $productId ?>">
                        <button class="cart-img">
                          <i class="fa fa-bag-shopping"></i>
                        </button>
                      </form>
                      <?php
                      ?>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
        <div class="catalog-title" id="drink">
          <h5 class="ft-5 b">Drinks <!--<i class="yellow"> Delicacies </i>--></h5>
          <a href="category/drinks.php">
            <button class="btn order more">See More</button>
          </a>
        </div>
        <div class="card-section">
          <div class="flex-container">
            <!-- PHP -->
            <?php

            $request = $conn->query("SELECT * FROM item_order LIMIT 10 "); //WHERE item_type = 'Local Delicacies'

            if (mysqli_num_rows($request) > 0) :
              while ($item = $request->fetch_assoc()) :
                $name = $item['item_Name'];
                $price = $item['item_Price'];
                $productId = $item['productid'];
            ?>
                <div class="flex-item">
                  <div class="card">
                    <div class="card-img">
                      <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                    </div>
                    <div class="card-body">
                      <div class="card-body-title"><?= $name ?></div>
                      <div class="card-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                    <div class="card-foot">
                      <div class="card-price"><del>N</del> <?= $price ?></div>
                      <?php

                      ?>
                      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="hidden" name="productId" value="<?= $productId ?>">
                        <button class="cart-img">
                          <i class="fa fa-bag-shopping"></i>
                        </button>
                      </form>
                      <?php
                      ?>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
        <div class="catalog-title" id="snacks">
          <h5 class="ft-5 b">Fast <i class="yellow"> Food </i></h5>
          <a href="category/snacks.php">
            <button class="btn order more">See More</button>
          </a>
        </div>
        <div class="card-section">
          <div class="flex-container">
            <!-- PHP -->
            <?php

            $request = $conn->query("SELECT * FROM item_order LIMIT 10 "); //WHERE item_type = 'Local Delicacies'

            if (mysqli_num_rows($request) > 0) :
              while ($item = $request->fetch_assoc()) :
                $name = $item['item_Name'];
                $price = $item['item_Price'];
                $productId = $item['productid'];
            ?>
                <div class="flex-item">
                  <div class="card">
                    <div class="card-img">
                      <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                    </div>
                    <div class="card-body">
                      <div class="card-body-title"><?= $name ?></div>
                      <div class="card-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                    <div class="card-foot">
                      <div class="card-price"><del>N</del> <?= $price ?></div>
                      <?php

                      ?>
                      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <input type="hidden" name="productId" value="<?= $productId ?>">
                        <button class="cart-img">
                          <i class="fa fa-bag-shopping"></i>
                        </button>
                      </form>
                      <?php
                      ?>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
        <div class="catalog-title stock">
          <h5 class="ft-5 b">New <i class="yellow"> Stock </i></h5>
        </div>
        <div class="card-section">
          <div class="flex-container">
            <!-- PHP -->
            <?php
            $request = $conn->query("SELECT * FROM item_order LIMIT 10");

            if (mysqli_num_rows($request) > 0) :

              while ($item = $request->fetch_assoc()) :
                $name = $item['item_Name'];
                $price = $item['item_Price'];
                $productId = $item['productid'];

            ?>
                <div class="flex-item">
                  <div class="card">
                    <div class="card-img">
                      <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                    </div>
                    <div class="card-body">
                      <div class="card-body-title"><?= $name ?></div>
                      <div class="card-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                    <div class="card-foot">
                      <div class="card-price"><?= $price ?></div>
                      <div class="cart-img">
                        <i class="fa fa-bag-shopping"></i>
                      </div>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>
    </section>
    <section class="menu">
      <h5 class="menu-title">Our <i class="yellow">Menu</i></h5>
      <div class="menu-section">
        <!-- PHP -->
        <?php
        $request = $conn->query("SELECT * FROM item_order LIMIT 10");

        if (mysqli_num_rows($request) > 0) :

          while ($item = $request->fetch_assoc()) :
            $name = $item['item_Name'];
            $price = $item['item_Price'];
            $productId = $item['productid'];

        ?>
            <div class="menu-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title"><?= $name ?></div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$<?= $price ?></div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif;
        ?>
      </div>
      <div class="menu-footer">
        <button class="btn order menu">More Menu</button>
      </div>
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
        <h5 class="ft-5 yellow">CALL US NOW: 09976443235</h5>
      </div>
    </div>
  </footer>
  <section class="foot">
    <h6>
      &copy;
      <a href="https://github.com/projecthanif/" target="_blank">projecthanif</a>
    </h6>
  </section>
  <script src="assets/js/app.js"></script>
</body>

</html>