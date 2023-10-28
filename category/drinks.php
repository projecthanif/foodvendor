<?php
require_once 'path.php';

use Database\Connection;
$conn = (new Connection())->getConn();

$food = get_all_food($conn);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/style.css" />
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
      <li class="nav-item">
        <a href="../customer/user.php" class="nav-link">
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
        <a href="foreign.php">
          <button class="btn select">
            <img src="../assets/img/kimchi.jpg" alt="" class="btn-img" />
            Foreign Delicacies
          </button>
        </a>
        <a href="local.php">
          <button class="btn select">
            <img src="../assets/img/kimchi.jpg" alt="" class="btn-img" />
            Local Delicacies
          </button>
        </a>
        <a href="#">
          <button class="btn select">
            <img src="../assets/img/cream.jpeg" alt="" class="btn-img" />
            Fresh Drink
          </button>
        </a>
        <a href="snacks.php">
          <button class="btn select">
            <img src="../assets/img/kimchi.jpg" alt="" class="btn-img" />
            Fast Food
          </button>
        </a>
      </div>
    </section>
    <section class="menu">
      <h5 class="menu-title">Drinks</h5>
      <div class="menu-section">
        <!-- PHP -->
        <?php
        foreach ($food as $item) :
          $id = $item['id'];
          $name = $item["name"];
          $price = $item["price"];
          $id = $item["id"];
          $img_url = $item["image_url"];

          $img_path = '../admin/uploads/' . $img_url;
        ?>
          <div class="menu-item">
            <div class="card">
              <div class="card-img">
                <img src="<?= $img_path ?>" alt="" class="card-img" />
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
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <button class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </button>
                </form>
              </div>
            </div>
          </div>
        <?php
        endforeach;
        ?>
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
  <script src="../assets/js/app.js"></script>
</body>

</html>