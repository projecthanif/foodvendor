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
                      <div class="card-price"><del>N</del><?= $price ?></div>

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
                      <div class="card-price"><del>N</del><?= $price ?></div>
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
                      <div class="card-price"><del>N</del><?= $price ?></div>
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
                      <div class="card-price"><del>N</del><?= $price?></div>
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