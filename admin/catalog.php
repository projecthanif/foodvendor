<?php
session_start();
if ($_SESSION['type'] == 'admin') {
    echo "
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta http-equiv='X-UA-Compatible' content='ie=edge'>
<meta name='Description' content='Enter your description here'/>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css'>
<link rel='stylesheet' href='assets/css/style.css'>
<link rel='shortcut icon' href='img/bowl.png' type='image/x-icon'>
<title>catalog</title>
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
                    </div>
                    
                    <div class='nav-item'>
                        <a href='' class='fa fa-shopping-cart' style='text-decoration:none; color: black;'>Cart</a>
                    </div>
                </div>   ";

    if (isset($_SESSION['type'])) {
        if ($_SESSION['type'] == 'admin') {
            echo " <div class='nav-item'>
                            <div class='dropdown'>
                            <button class='btn dropdown-toggle' data-bs-toggle='dropdown'><i class='fa fa-user'><a href='#'  style='text-decoration:none; color: black;'><b>" . $_SESSION['name'] . "</b></a></i></button>
                            <div class='dropdown-menu p-2'>
                                <a href='' class='dropdown-item' style=''><div class='dropdown-item-text'><i class='fa fa-user'> My Account</i></div></a>
                                <a href='' class='dropdown-item' style='color: black;'><div class='dropdown-item-text'><i class='fa fa-box'>Orders</i></div></a>
                                <a href='' class='dropdown-item' style='color: black;'><div class='dropdown-item-text'><i class='fa fa-message'>Inbox</i></div></a>
                                <a href='logout.php' type='button' class='btn dropdown-footer' style='color:black;'><div class='dropdown-item-text'><i classs=fa fa->LOGOUT</i></div></a>
                            </div>
                            </div>
                        </div>";
        }
    } else {
        header('Location:index.php');
    }
    echo "   

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
           <div class='container'>
            <div class='row'>
                <div class='col-sm-4'>
                    <form action='catalogdb.php' method='post' class='form' enctype='multipart/form-data'>
                        <label for='name'>Name</label>
                        <input type='text' name='name' id='' class='form-control'>
                        <label for='type'>Type</label>
                        <select name='type' id='' class='form-control '>
                            <option value='' class='form-control'>Select one ...</option>
                            <option value='Fast Food' class='form-control'>Fast Food</option>
                            <option value='Local Delicacies' class='form-control'>Local Delicacies</option>
                            <option value='Foreign Delicacies' class='form-control'>Foreign Delicacies</option>
                            <option value='DRINKS' class='form-control'>DRINKS</option>
                        </select>
                        <label for='details'>DETAILS</label>
                        <textarea name='details' id='' cols='30' rows='10' class='form-control'></textarea>
                        <label for='price'>PRICE</label>
                        <input type='number' name='price' id='' class='form-control'>
                        <input type='file' name='file' id='' class='form-control'> 
                        <input type='submit' value='Submit' name='submit' class='btn bg-primary'>                       
                    </form>
                </div>
                <div class='col-sm-8'>
                    <div class='row'>";

    require_once('connect.php');
    //-GET From Datbase
    $get = "SELECT * FROM item_order";
    $result = $conn->query($get);
    if (mysqli_num_rows($result)) {
        while ($out = $result->fetch_assoc()) {
            $name = $out['item_Name'];
            $price = $out['item_Price'];
            $img = $out['item_Img'];
            $details = $out['item_Details'];
            $id = $out['productid'];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                if (isset($_POST['id'])) {
                    $itemId = $_POST['id'];
                    $sql = "DELETE FROM item_order WHERE productid ='$itemId'";
                    $conn->query($sql);


                }

            }

            $heredoc = <<<TEXT
                      
          <div class='col-sm-4'>
          <div class='container'>
          <div class='card m-2' style='width:250px;heigh:%;'>
          <div class='card-img'>
          <img src='imgupload/$img' width='250px' height='200px' style='thumbnail'>
          </div>
          <div class='card-body'>
          <div class='card-text'><b>$name</b></div>
          <div class='card-text'>$details</div><br>
          <div class='card-text'>$ $price</div>
          <form action='' method='post'>
          <input type='hidden' name='id' value='$id'>
          <input value='DELETE' type='submit'>
          </form>
          </div></div></div></div>
       TEXT;
            if (empty($img && $details && $name)) {

            } else {
                echo $heredoc;
            }

        }
    }
    echo "        
                    </div>
                </div>
            </div>
        </div>


<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js'></script>
</body>
</html>";
} else {
    header("Location: index.php");
}
?>