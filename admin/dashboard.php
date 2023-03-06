<?php
 session_start();
$conn = mysqli_connect('localhost', 'root', '', 'admin');
?>
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
<meta name='Description' content='Enter your description here'/>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootswatch/5.1.0/litera/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css'>
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='shortcut icon' href='img/bowl.png' type='image/x-icon'>
<title>Shopping vendor</title>
</head>
<body>
    
                          <!-- #Navigation bar -->
        <nav class='navbar navbar-expand-sm bg-light p-4'>
            <!-- <div class='container'> -->
                <div class='nav-brand'>
              <img src='img/bowl.png' alt=''>
            </div>
                    <div class='input-group'>
                    <div class='nav-item'>
                        <form action='' method='post' class='form'>
                            <div class='input-group'>
                                    <input type='search' name='search' id='' class='form-control' style='width:300px'>
                                </div>
                        </form>
                    </div>
                    <div class='nav-item'>
                        <form action='' method='post' class='form'>
                    <input type='submit' value='Search' class='form-control bg-warning'>
                        </form>
                    </div>
                    </div>
                    <?php                  
                        if ($_SESSION['type'] == 'admin') {
                            echo " <div class='nav-item'>
                            <div class='dropdown'>
                            <button class='btn dropdown-toggle' data-bs-toggle='dropdown'><i class='fa fa-user'><a href='#'  style='text-decoration:none; color: black;'><b>" . $_SESSION["name"] . "</b></a></i></button>
                            <div class='dropdown-menu p-2'>
                                <a href='' class='dropdown-item' style=''><div class='dropdown-item-text'><i class='fa fa-user'> My Account</i></div></a>
                                <a href='' class='dropdown-item' style='color: black;'><div class='dropdown-item-text'><i class='fa fa-box'>Orders</i></div></a>
                                <a href='' class='dropdown-item' style='color: black;'><div class='dropdown-item-text'><i class='fa fa-message'>Inbox</i></div></a>
                                <a href='logout.php' type='button' class='btn dropdown-footer' style='color:black;'><div class='dropdown-item-text'><i classs=fa fa->LOGOUT</i></div></a>
                            </div>
                            </div>
                        </div>";
                        } 
                    else {
                        header("Location: index.php");                      
                    }                    
                    ?>
                    <div class='nav-item'>
                        <a href='order.php' class='fa fa-shopping-cart' style='text-decoration:none; color: black;'>Cart</a>
                    </div>
                </div>                   
        </nav>
          <!-- #Navigation ends here -->
           <!---- Menu #Navigation start here ---->
           <div class='container-fluid text-white bg-dark navbar-dark'>
            <nav class='navbar navbar-expand-sm p-3'>
                <div class='navbar-nav'>
                    <div class='nav-item'>
                    <div class='nav-item-text'>
                        <a href='' class='nav-link text-white'></a>
                    </div>
                    </div>
                <div class='nav-item'>
                    <div class='nav-item-text'>
                    <a href='dashboard.php' class='nav-link text-white' >Dashboard</a>
                    </div>
                </div>
                <div class='nav-item'>
                    <div class='nav-item-text'>
                    <a href='#' class='nav-link text-white'></a>
                    </div>
                </div>
                <div class='nav-item'>
                    <a href='catalog.php' class='nav-link text-white'>Catalog</a>
                </div>
                <div class='nav-item'>
                    <div class='nav-item-text'>
                    <a href='#' class='nav-link text-white'></a>
                    </div>
                </div>
                <div class='nav-item'>
                    <a href='user_info.php' class='nav-link text-white'>Customer</a>
                </div>
                <div class='nav-item'>
                    <a href='index.php' class='nav-link text-white'>Home</a>
                </div>
                </div>
            </nav>
           </div>
        <!-- #endregion -->
        <!-- #Php file-->
        <?php
        require_once('connect.php');
        $SQL = "SELECT COUNT(userid)
        FROM users
        WHERE type='customer'";
        $conn->query($SQL);    
        
        
        
        
        ?>   
        <!--------- footer  ------------>
        <div class='container-fluid bg-light'>
             <hr>
             <div class='container-fluid bg-light'>
                <div class='row'>
                    <div class='col-sm-4'>
                         <h6>Newsletter</h6>
                         <p>Subscribe to get information about our food</p>     
                    </div>
                    <div class='col-sm-8'>
                        <form action='' method='post' class='form'>
                            <div class='input-group'>
                                <input type='text' name='email' id='' class='form-control'>
                                <div type='submit' class='btn btn-danger'><i class='fa fa-envelope'></i></div>
                            </div>
                        </form>
                
                    </div>                    
                </div>
                </div>
                <hr>
                <p>Follow us on</p>
                    <a href='https://twitter.com/offixial_hanif' style='color:black'><i class='fa-brands fa-twitter fa-2x'></i></a>                        
                    <a href='https://www.instagram.com/offixial_hanif/' style='color:black'><i class='fa-brands fa-instagram fa-2x'></i></a>
                    <a href='https://wa.me/23409061887329' style='color:black'><i class='fa-brands fa-whatsapp fa-2x'></i></a>
                    <hr>
        </div>
        
        



<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js'></script>
</body>
</html>
                                   
                    
