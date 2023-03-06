<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <meta name='Description' content='Enter your description here' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/litera/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="shortcut icon" href="img/bowl.png" type="image/x-icon">
  <link rel='stylesheet' href='assets/css/style.css'>
  <title>Shopping vendor</title>
</head>

<body>


  <div class="container-fluid bg-light ">
    <div class="container-fluid ">
      <nav class="navbar navbar-expand-sm justify-content-between">
        <ul class="navbar-nav">
          <li class="nav-item">
            <div class="nav-brand">
              <img src="./img/bowl.png" alt="">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ">
          <li class="nav-item">
            <?php include_once('./type.php') ?>
          </li>
        </ul>
      </nav>
    </div>
  </div>
  <!-- #Navigation bar -->
  <div class='container-fluid text-white bg-dark navbar-dark'>
    <nav class='navbar navbar-expand-sm p-3 '>
      <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#collapse'>
        <span class='navbar-toggler-icon'></span></button>
      <div class='collapse navbar-collapse' id='collapse'>
        <ul class='navbar-nav'>
          <li class='nav-item'>
            <div class='dropdown'>
              <button class='btn text-white dropdown-toggle' data-bs-toggle='dropdown'>Select by
                category</button>
              <div class='dropdown-menu'>
                <div class='dropdown-item'>
                  <a href='./category/fast.php' class='dropdown-link text-black' style='text-decoration: none;'>
                    <div class='dropdown-item-text'>Fast Food</div>
                  </a>
                </div>
                <div class='dropdown-item'>
                  <a href='./category/local.php' class='dropdown-link text-black' style='text-decoration: none;'>
                    <div class='dropdown-item-text'>Local Delicacies</div>
                  </a>
                </div>
                <div class='dropdown-item'>
                  <a href='./category/foreign.php' class='dropdown-link text-black' style='text-decoration: none;'>
                    <div class='dropdown-item-text'>Foreign Delicacies</div>
                  </a>
                </div>
                <div class='dropdown-item'>
                  <a href='./category/drinks.php' class='dropdown-link text-black' style='text-decoration: none;'>
                    <div class='dropdown-item-text'>Drinks</div>
                  </a>
                </div>
              </div>
            </div>
          </li>
          <li class='nav-item'>
            <div class='nav-item-text'>
              <a href='index.php' class='nav-link text-white'>Home</a>
            </div>
          </li>
          <li class='nav-item'>
            <a href='shop.php' class='nav-link text-white'>Shop</a>
          </li>
          <li class='nav-item'>
            <a href='#' class='nav-link text-white'>Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>


  <?php

  require_once('connection/connect.php');
  if ($_SESSION) {
    echo "           <div class='container-fluid'>
                <div class='container-fluid m-3'>
                <div class='row mb-2 g-2'>";

    $order_name = $_SESSION['name']; // accessing username currently log in using session                    
  
    /** @var $SQL
     *  Accessing the users data 
     *from the database system using the name gotten 
     *from the session
     * @var $id  
     * 
     **/
    $SQL = "SELECT * FROM users
                       WHERE user_fname='$order_name'";
    $resul = $conn->query($SQL);
    $user = $resul->fetch_assoc();
    $id = $user['userid'];

    /** @var $sql
     * using $id gotten from 
     * $SQL to access the foreign key 
     * in user_order 
     * 
     */

    $sql = "SELECT * FROM user_order
                      WHERE userid=$id;";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) > 0) {
      while ($item = $result->fetch_assoc()) {
        $product = $item['productid'];
        $time = $item['timeofpurchase'];
        /** @var $data
         * getting the product id 
         */

        $data = "SELECT * FROM item_order
                             WHERE productid=$product";
        $order = $conn->query($data);
        $product_order = $order->fetch_assoc();
        if (empty(mysqli_query($conn, $data))) {
          echo "This is fun";

        } else {
          $pic = $product_order['item_Img'];
          $name = $product_order['item_Name'];
          $details = $product_order['item_Details'];
          $price = $product_order['item_Price'];

          if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $not = $_POST['del'];
            /** @var $del 
             * use a sql code to delete the users order
             * from the database
             *
             * 
             */
            $del = "DELETE FROM user_order
                      WHERE timeofpurchase='$not';";
            $conn->query($del);
          }
          echo "                            
                    <div class='col-sm-4 col-md-4 col-lg-3'>
                    <div class='card' style='width:250px;height:%;'>
                    <div class='card-img'>
                    <img src='imgupload/$pic' width='250px' height='200px' style='thumbnail'>
                    </div>
                    <div class='card-body'>
                    <div class='card-text'><b>$name</b></div>
                    <div class='card-text'>$details</div><br>
                    <div class='card-text'>$ $price</div>
                    <form action='' method='post'>
                    <input type='hidden' name='del' value='$time'>
                    <input value='Cancel' type='submit' class='btn btn-outline-danger'>
                    </form>
                    </div>        
                    </div>
                    </div> 
                    ";

        }
      }
    }

  } else {
    header("Location: index.php");
  }
  ?>
  <div class="container-fluid bg-light">
    <hr>
    <div class="container-fluid bg-light">
        <div class="row">
            <div class="col-sm-4">
                <h6>Newsletter</h6>
                <p>Subscribe to get information about our food</p>
            </div>
            <div class="col-sm-8">
                <div class="form-input">
                    <form action="" method="post" class="form">
                        <input type="text" name="email" id="" class="form-control">
                    </form>
                    <form action="" method="post" class="form">
                        <input type="submit" class="input-group-text"><i class="fa fa-envelope"></i>
                    </form>                  
                   
                </div>
            </div>
        </div>
    </div>
    <hr>
    <p>Follow us on</p>
    <a href='https://twitter.com/offixial_hanif' style='color:black'><i class='fa-brands fa-twitter fa-2x'></i></a>
    <a href='https://www.instagram.com/offixial_hanif/' style='color:black'><i
            class='fa-brands fa-instagram fa-2x'></i></a>
    <a href='https://wa.me/23409061887329' style='color:black'><i class='fa-brands fa-whatsapp fa-2x'></i></a>
    <hr>
</div>





<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js'></script>
</body>

</html>
 