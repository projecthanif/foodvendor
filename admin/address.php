<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'admin');
if ($_SESSION) {
    echo "
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
        <nav class='navbar navbar-expand-sm bg-light p-2'>
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
                    </div>";


    include_once('type.php');
    echo "
                    <div class='nav-item'>
                        <a href='order.php' class='fa fa-shopping-cart' style='text-decoration:none; color: black;'>Cart</a>
                    </div>
                </div>                   
        </nav>
          <!-- #Navigation ends here -->
          <!---- ---->
          <div class='container-fluid text-white bg-dark navbar-dark'>
           <nav class='navbar navbar-expand-sm p-3'>
           <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#collapse'>
           <span class='navbar-toggler-icon'></span></button>
           <div class='collapse navbar-collapse' id='collapse'>
               <ul class='navbar-nav'>
                   <li class='nav-item'>
                   <div class='dropdown'>
                       <button class='btn text-white dropdown-toggle' data-bs-toggle='dropdown'>Select by category</button>
                       <div class='dropdown-menu'>
                           <div class='dropdown-item'>
                               <a href='fast.php' class='dropdown-link text-black' style='text-decoration: none;'>
                               <div class='dropdown-item-text'>Fast Food</div>
                               </a>
                           </div>
                           <div class='dropdown-item'>
                               <a href='local.php' class='dropdown-link text-black' style='text-decoration: none;'>
                               <div class='dropdown-item-text'>Local Delicacies</div>
                               </a>
                           </div>
                           <div class='dropdown-item'>
                               <a href='foreign.php' class='dropdown-link text-black' style='text-decoration: none;'>
                               <div class='dropdown-item-text'>Foreign Delicacies</div>
                               </a>
                           </div>
                           <div class='dropdown-item'>
                               <a href='drinks.php' class='dropdown-link text-black' style='text-decoration: none;'>
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
           </div></nav>
          </div>
           <div class='container p-2'>
               <div class='row'>
                <div class='col-sm-4'>";
    echo "Hello!  " . $_SESSION['name'];

    echo " <ul class='list-group p-2'>
                        <li class='list-group-item'><a href='account.php' class='list-link text-black ' style='text-decoration:none'><b>ACCOUNT DETAILS</b></a></li>
                        <li class='list-group-item'><a href='order.php' class='list-link text-black ' style='text-decoration:none'><b>ORDERS</b></a></li>
                        <li class='list-group-item active'><a href='address.php' class='list-link text-black ' style='text-decoration:none'><b>ADDRESS</b></a></li>
                    </ul>
                </div>
               </div>
           </div>      

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
</html>";
} else {
    header("Location: index.php");
}