<?php
include_once('../html/header.html');
require_once('../connection/connect.php');
if ($_SESSION) :  ?>
  <div class='container mt-2'>
    <div class='row mb-2 g-2'>

      <?php

      $order_name = $_SESSION['name']; // accessing username currently log in using session                    

      $resul = $conn->query("SELECT * FROM users WHERE user_fname='$order_name'");
      $user = $resul->fetch_assoc();
      $id = $user['userid'];

      $result = $conn->query("SELECT * FROM user_order WHERE userid='$id';");

      if (mysqli_num_rows($result) > 0) :
        while ($item = $result->fetch_assoc()) :

          $product = $item['productid'];
          $time = $item['timeofpurchase'];

          $order = $conn->query("SELECT * FROM item_order WHERE productid='$product'");

          $product_order = $order->fetch_assoc();

          if (empty(mysqli_query($conn, $data))) : ?>

            <p> This is fun </p>

          <?php else :

            $pic = $product_order['item_Img'];
            $name = $product_order['item_Name'];
            $details = $product_order['item_Details'];
            $price = $product_order['item_Price'];

            if ($_SERVER['REQUEST_METHOD'] == "POST") {
              $not = $_POST['del'];

              $conn->query("DELETE FROM user_order WHERE timeofpurchase='$not';");
            }

          ?>

            <div class='col-sm-12 col-md-4 col-lg-3'>
              <div class='card' style='width:250px; height:0%;'>
                <div class='card-header' style='text-align:center'>
                  <div class='card-text'> <?= $name ?></div>
                </div>
                <div class='card-img'>
                  <img src='../imgupload/<?= $pic ?>' width='250px' height='200px' style='thumbnail' class='card-img'>
                </div>
                <div class='card-body' style="text-align:center">
                  <div class='card-text'>Price: <del>N</del> <?= $price ?></div><br>
                </div>
                <div class='card-footer'>
                  <form action='' method='post'>
                    <input type='hidden' name='del' value='<?= $time ?>'>
                    <input value='Cancel' type='submit' class='btn btn-outline-danger' style='border-radius:3px'>
                  </form>
                </div>
              </div>
            </div>

          <? endif ?>

        <?php endwhile ?>

      <?php endif ?>
    </div>
  </div>

<?php else :  header("Location: index.php"); ?>

<?php include_once('../html/foot.html');
endif ?>