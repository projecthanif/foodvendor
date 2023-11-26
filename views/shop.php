<?php require_once(dirname(__DIR__) . '/' . '/views/partials/head.php')?>
<?php require_once(dirname(__DIR__) . '/' . '/views/partials/navbar.php')?>
  <main>
    <section class="catalog-section">
      <div class="catalog-title">
        <h5 class="ft-5 b">Catalog Section</h5>
      </div>
      <div class="select">
        <a href="shop/foreign">
          <button class="btn select">
            <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
            Foreign Delicacies
          </button>
        </a>
        <a href="shop/local">
          <button class="btn select">
            <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
            Local Delicacies
          </button>
        </a>
        <a href="shop/drinks">
          <button class="btn select">
            <img src="assets/img/cream.jpeg" alt="" class="btn-img" />
            Fresh Drink
          </button>
        </a>
        <a href="category/snacks.php">
          <button class="btn select">
            <img src="assets/img/kimchi.jpg" alt="" class="btn-img" />
            Fast Food
          </button>
        </a>
      </div>
      <div class="catalog-item" id="food">

        <!-- CATALOG -->

        <section class="menu">
          <h5 class="menu-title">Our <i class="yellow">Menu</i></h5>
          <div class="menu-section">
            <!-- PHP -->
            <?php
            foreach ($food as $item) :
              $id = $item["id"];
              $name = $item['name'];
              $price = $item['price'];
              $img_url = $item['image_url'];

              $img_path = '/admin/uploads/' . $img_url;
            ?>
              <div class="menu-item">
                <div class="card">
                  <div class="card-img">
                    <!-- <img src="assets/img/kimchi.jpg" alt="" class="card-img" /> -->
                    <img src="<?= ($img_path) ?>" alt="" class="card-img" />
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
<?php require_once(dirname(__DIR__) . '/' . '/views/partials/footer.php')?>