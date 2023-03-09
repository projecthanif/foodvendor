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
                        <?php require_once('link.php') ?>
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
                                    <a href='./category/fast.php' class='dropdown-link text-black'
                                        style='text-decoration: none;'>
                                        <div class='dropdown-item-text'>Fast Food</div>
                                    </a>
                                </div>
                                <div class='dropdown-item'>
                                    <a href='./category/local.php' class='dropdown-link text-black'
                                        style='text-decoration: none;'>
                                        <div class='dropdown-item-text'>Local Delicacies</div>
                                    </a>
                                </div>
                                <div class='dropdown-item'>
                                    <a href='./category/foreign.php' class='dropdown-link text-black'
                                        style='text-decoration: none;'>
                                        <div class='dropdown-item-text'>Foreign Delicacies</div>
                                    </a>
                                </div>
                                <div class='dropdown-item'>
                                    <a href='./category/drinks.php' class='dropdown-link text-black'
                                        style='text-decoration: none;'>
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
                    <!-- <li class='nav-item'>
                        <a href='#' class='nav-link text-white'>Contact</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </div>
    <!-- # From database -->
    <div class="container">
        <div class="row">
            <?php
            require_once('connection/connect.php');




            #GET From Datbase
            $get = "SELECT * FROM item_order";
            $result = $conn->query($get);
            if (mysqli_num_rows($result)) {
                while ($out = $result->fetch_assoc()) {
                    $name = $out['item_Name'];
                    $price = $out['item_Price'];
                    $img = $out['item_Img'];
                    $details = $out['item_Details'];
                    $id = $out['productid'];
                    $heredoc = <<<TEXT
        
          <div class='col-sm-3 col-md-5 col-lg-3'>
          <div class='container'>
          <div class='card m-2' style='width:250px;heigh:%;'>
          <div class='card-header' style='text-align:center'>
          <div class='card-text'>$name</div></div>
          <div class='card-img'>
          <img src='imgupload/$img' width='250px' height='200px' style='thumbnail'>
          </div>
          <div class='card-body' style='text-align:center'>
          <div class='card-text'>Price: <del>N</del> $price</div><br>
          </div>
          <div class='card-footer'>
          <form action='' method='post'>
          <input type='hidden' name='id' value='$id'>
          <button  class='btn btn-success' style='border-radius:3px;color:white;'>Add to cart <i class='fa fa-shopping-cart'></i></button>
          </form>
          </div>
          </div></div></div>
       TEXT;
                    if (empty($img && $details && $name)) {

                    } else {
                        echo $heredoc;
                    }

                }
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $session_Name = $_SESSION['name'];
                    $SQL = "SELECT userid FROM users
        WHERE user_fname='$session_Name';";
                    $session_query = $conn->query($SQL);
                    $session_out = $session_query->fetch_assoc();
                    $sid = $session_out['userid'];

                    if (isset($_POST['id'])) {
                        $itemId = $_POST['id'];
                        $sql = "INSERT INTO user_order(userid,productid)
          VALUE($sid,$itemId)";
                        $result = $conn->query($sql);
                        if ($result) {
                            echo "<div class='alert alert-success alert-dismissible'><strong>Added to cart</strong><button type='button' class='btn-close' data-bs-dismiss='alert'></button></div>";

                        }

                    }
                }

            }




            ?>
        </div>
    </div>
    <div class="link">
        <div href="index.php"></div>
    </div>

    <!------------Footer Starts Here-------------->
    <div class="container-fluid bg-light">
        <hr>
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-sm-4">
                    <h6>Newsletter</h6>
                    <p>Subscribe to get information about our food</p>
                </div>
                <div class="col-sm-8">
                    <form action="" method="post" class="form">
                        <input type="text" name="email" id="" class="form-control">
                        <span><input type="submit" class="input-group-text"><i class="fa fa-envelope"></i></span>
                    </form>

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