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
        <a href="shop/snacks">
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
              $img_url = "uploads/" . $item['image_url'];

            ?>
              <?php require(dirname(__DIR__) . '/' . 'views/partials/card.php') ?>
            <?php
            endforeach;
            ?>
          </div>
        </section>
  </main>
<?php require_once(dirname(__DIR__) . '/' . '/views/partials/footer.php')?>