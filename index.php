<?php
// session_start();
$conn = mysqli_connect('localhost', 'root', '', 'admin');
// include_once('./html/header.html');
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <meta name='Description' content='Enter your description here' />
    <link rel="import" href="bootstrap/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/litera/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="shortcut icon" href="img/bowl.png" type="image/x-icon">
    <!-- <link rel='stylesheet' href='assets/css/style.css'> -->
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
                </ul>
            </div>
        </nav>
    </div>
    <!-- #Navigation ends here -->

    <!---- Jumbotron start here ------>
    <div class="container-fluid" style="background-color:  #fa8239; height: 300px;">
        <div class='d-flex justify-content-around'>
            <div class='d-flex align-items-center'>
                <div class='card-text text-light'>
                    <h2>YOU CAN ORDER NOW</h2>
                    <h5>Delight & Joy</h5>
                </div>
            </div>
            <div>
                <img src='img/dash1.png' style="width:260px;;">
            </div>
        </div>
    </div>
    <!-- Ends here-->
    <div class="container p-2">
        <div class="row">
            <div class="col-sm-6">
                <img src="img/juice.jpg" class="card-img"></img>
            </div>
            <div class="col-sm-6">
                <img src="img/salad.jpg" class="card-img"></img>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a href="fast.php" class="link text-black" style="text-decoration:none;">
                <h4>Fast Food</h4>
            </a>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <img src="img/fast1.jpeg" alt="" class="card-img" style="height:200px;">
                <p></p>
            </div>
            <div class="col-sm-3">
                <img src="img/fast2.jpeg" alt="" class="card-img" style="height:200px;">
                <p></p>
            </div>
            <div class="col-sm-3">
                <img src="img/fast1.jpeg" alt="" class="card-img" style="height:200px;">
                <p></p>
            </div>
            <div class="col-sm-3">
                <img src="img/fast2.jpeg" alt="" class="card-img" style="height:200px;">
                <p></p>
            </div>
        </div></br>
    </div>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a href="local.php" class="link text-black" style="text-decoration:none;">
                <h4>Local Delicacies</h4>
            </a>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="img/local1.jpg" alt="" class="card-img" style="height: 230px;" title="pounded Yam and Egusi">
            </div>
            <div class="col-sm-4">
                <img src="img/local2.jpg" alt="" class="card-img" style="height: 230px;" title="Porridge and Vegetable">
            </div>
            <div class="col-sm-4">
                <img src="img/local3.jpeg" alt="" class="card-img" style="height: 230px;" title="Vegetable Soup">
            </div>
        </div>
    </div> </br>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a href="foreign.php" class="link text-black" style="text-decoration:none;">
                <h4>Foreign Delicacies</h4>
            </a>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="img/kimchi.jpg" alt="" class="card-img" title="Kimchi">
            </div>
            <div class="col-sm-4">
                <img src="img/foreign.jpg" alt="" class="card-img">
            </div>
            <div class="col-sm-4">
                <img src="img/foreign.jpg" alt="" class="card-img">
            </div>
        </div>
    </div> </br>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a href="drinks.php" class="link text-black" style="text-decoration:none;">
                <h4>Drinks <i class="fa-thin fa-square-left"></i></h4>
            </a>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="img/download1.jpeg" alt="" class="card-img" style="height:230px">
            </div>
            <div class="col-sm-4">
                <img src="img/download (1).jpeg" alt="" class="card-img" style="height:230px">
            </div>
            <div class="col-sm-4">
                <img src="img/cream.jpeg" alt="" class="card-img" style="height: 230px;">
            </div>
        </div>
    </div>
    </div></br>
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