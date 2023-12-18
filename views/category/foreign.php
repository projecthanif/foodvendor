<?php require dirname(__DIR__) . '/../' . '/views/partials/head2.php' ?>
<?php require dirname(__DIR__) . '/../' . '/views/partials/nav2.php' ?>

    <main>
        <section class="catalog-section">
            <div class="catalog-title">
                <h5 class="ft-5 b">Catalog Section</h5>
            </div>
            <div class="select">
                <a href="#">
                    <button class="btn select">
                        <img src="../assets/img/kimchi.jpg" alt="" class="btn-img" />
                        Foreign Delicacies
                    </button>
                </a>
                <a href="local">
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
            <h5 class="menu-title">Foreign <i class="yellow"> Delicacies </i></h5>
            <div class="menu-section">
        <!-- PHP -->
        <?php
        foreach ($food as $item) :
          $id = $item['id'];
          $name = $item["name"];
          $price = $item["price"];
          $id = $item["id"];
          $img_url = "/uploads/" . $item["image_url"];
        ?>
        <?php require dirname(__DIR__) . '/../' . '/views/partials/card.php' ?>
        <?php
        endforeach;
        ?>
      </div>
        </section>
    </main>
<?php require dirname(__DIR__) . '/../' . '/views/partials/footer.php' ?>
