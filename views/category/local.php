<?php require dirname(__DIR__) . '/../' . '/views/partials/head2.php' ?>
<?php require dirname(__DIR__) . '/../' . '/views/partials/nav2.php' ?>

  <main>
    <section class="catalog-section">
      <div class="catalog-title">
        <h5 class="ft-5 b">Catalog Section</h5>
      </div>
      <div class="select">
        <a href="foreign">
          <button class="btn select">
            <img src="../assets/img/kimchi.jpg" alt="" class="btn-img" />
            Foreign Delicacies
          </button>
        </a>
        <a href="#">
          <button class="btn select">
            <img src="../assets/img/kimchi.jpg" alt="" class="btn-img" />
            Local Delicacies
          </button>
        </a>
        <a href="drinks">
          <button class="btn select">
            <img src="../assets/img/cream.jpeg" alt="" class="btn-img" />
            Fresh Drink
          </button>
        </a>
        <a href="snacks">
          <button class="btn select">
            <img src="../assets/img/kimchi.jpg" alt="" class="btn-img" />
            Fast Food
          </button>
        </a>
      </div>
    </section>
    <section class="menu">
      <h5 class="menu-title">Local <i class="yellow"> Delicacies </i></h5>
      <div class="menu-section">
        <!-- PHP -->
        <?php
        foreach ($food as $item) :
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
<?php require dirname(__DIR__) . '/../' . '/views/partials/footer.php' ?>
