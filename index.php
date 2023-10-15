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
  <nav id="nav">
    <a href="index.php">
      <img src="assets/img/bowl.png" alt="" class="nav-brand" />
    </a>
    <button class="btn-nav" id="navToggle" onclick="showNav()">
      <i class="fa fa-bars fa-2x"></i>
    </button>
    <ul class="navbar" id="navbar">
      <li class="nav-item">
        <form action="" class="form">
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
        <a href="customer/user.php" class="nav-link">
          <i class="fa-regular fa-user fa-2x"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa-regular fa-heart fa-2x"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="customer/cart.php" class="nav-link">
          <i class="fa fa-bag-shopping fa-2x"></i>
        </a>
      </li>
    </ul>
  </nav>

  <main>
    <article>
      <div class="jumbotron">
        <div class="jumbo-text">
          <h1 class="ft-1">Delicious <i class="yellow"> Delicacies </i></h1>
          <h5 class="ft-5">Your Taste Buds will love it</h5>
          <div class="button">
            <!-- <a href="shop.php" class="link">
                <button class="btn product">See all product</button>
              </a> <br /> -->
            <a href="shop.php" class="link">
              <button class="btn order">Order Now</button>
            </a>
          </div>
        </div>
        <img src="assets/img/dash1.png" alt="food" class="img-fluid jumbo-img" />
      </div>
    </article>
    <section class="catalog-section">
      <div class="catalog-title">
        <h5 class="ft-5 b">Catalog Section</h5>
        <h5 class="ft-5 b">
          <i class="yellow">Delicacies</i>
        </h5>
      </div>
      <div class="select">
        <button class="btn select">
          <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
          Rice Bowl
        </button>
        <button class="btn select">
          <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
          Beef Stack
        </button>
        <button class="btn select">
          <img src="assets/img/cream.jpeg" alt="" class="btn-img" />
          Fresh Drink
        </button>
        <button class="btn select">
          <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
          Spaghetti
        </button>
      </div>
      <div class="catalog-item" id="food">
        <div class="catalog-title">
          <h5 class="ft-5 b">Best <i class="yellow"> Selling </i></h5>
        </div>
        <div class="card-section">
          <div class="flex-container">
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="catalog-title stock">
          <h5 class="ft-5 b">New <i class="yellow"> Stock </i></h5>
        </div>
        <div class="card-section">
          <div class="flex-container">
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="flex-item">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
                </div>
                <div class="card-body">
                  <div class="card-body-title">Kimchi</div>
                  <div class="card-rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                  </div>
                </div>
                <div class="card-foot">
                  <div class="card-price">$400</div>
                  <div class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="special">
      <div class="s-body">
        <div class="body-s">
          <h5 class="special-title">Today's Special</h5>
          <h5 class="yellow s">Surprise for you</h5>
          <div class="special-body">
            <p class="p-2">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Voluptatem laboriosam quibusdam odio. Iste deserunt impedit est
              eligendi labore, nihil ducimus sed tenetur quam eum magni
              sapiente pariatur quos dicta adipisci?
            </p>
          </div>
          <div class="special-price">
            <h4 class="yellow price"><sup>$</sup> 45</h4>
            <button class="btn order s">Order Now</button>
          </div>
        </div>
        <div class="special-pic">
          <img src="assets/img/Burger.png" alt="" class="special-img" />
        </div>
      </div>
    </section>
    <section class="menu">
      <h5 class="menu-title">Our <i class="yellow">Menu</i></h5>
      <!-- <div class="menu-para">
          <p>
            
          </p>
        </div> -->
      <div class="menu-section">
        <div class="menu-item">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
            </div>
            <div class="card-body">
              <div class="card-body-title">Kimchi</div>
              <div class="card-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="card-foot">
              <div class="card-price">$400</div>
              <div class="cart-img">
                <i class="fa fa-bag-shopping"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-item">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
            </div>
            <div class="card-body">
              <div class="card-body-title">Kimchi</div>
              <div class="card-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="card-foot">
              <div class="card-price">$400</div>
              <div class="cart-img">
                <i class="fa fa-bag-shopping"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-item">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
            </div>
            <div class="card-body">
              <div class="card-body-title">Kimchi</div>
              <div class="card-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="card-foot">
              <div class="card-price">$400</div>
              <div class="cart-img">
                <i class="fa fa-bag-shopping"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-item">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
            </div>
            <div class="card-body">
              <div class="card-body-title">Kimchi</div>
              <div class="card-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="card-foot">
              <div class="card-price">$400</div>
              <div class="cart-img">
                <i class="fa fa-bag-shopping"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-item">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
            </div>
            <div class="card-body">
              <div class="card-body-title">Kimchi</div>
              <div class="card-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="card-foot">
              <div class="card-price">$400</div>
              <div class="cart-img">
                <i class="fa fa-bag-shopping"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-item">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
            </div>
            <div class="card-body">
              <div class="card-body-title">Kimchi</div>
              <div class="card-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="card-foot">
              <div class="card-price">$400</div>
              <div class="cart-img">
                <i class="fa fa-bag-shopping"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="menu-item">
          <div class="card">
            <div class="card-img">
              <img src="assets/img/kimchi.jpg" alt="" class="card-img" />
            </div>
            <div class="card-body">
              <div class="card-body-title">Kimchi</div>
              <div class="card-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
              </div>
            </div>
            <div class="card-foot">
              <div class="card-price">$400</div>
              <div class="cart-img">
                <i class="fa fa-bag-shopping"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="menu-footer">
        <a href="shop.php" class="link">
          <button class="btn order menu">More Menu</button>
        </a>
      </div>
    </section>
    <section>
      <div class="services">
        <div class="ser-container">
          <div class="ser-item">
            <!-- <div class="social-card">
                <div class="social-title">Follow Us on our Social page</div>

              </div> -->
          </div>
          <div class="ser-item">

          </div>
        </div>
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
        <h5 class="ft-5 yellow"> CALL US NOW: 09112607445</h5>
      </div>
    </div>
  </footer>
  <section class="foot">
    <h6> &copy;
      <a href="https://github.com/projecthanif/" target="_blank">projecthanif</a>
    </h6>
  </section>
  <script src="assets/js/app.js"></script>
</body>

</html>