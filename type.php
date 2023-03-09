<?php
// session_destroy();

session_start();
if (isset($_SESSION['type'])) {
    if ($_SESSION['type'] == 'admin') {
        echo " <div class='nav-item'>
                            <div class='dropdown'>
                            <button class='btn dropdown-toggle' data-bs-toggle='dropdown'><i class='fa fa-user fa-2X'><a href='#'  style='text-decoration:none; color: black;'></i><b>" . $_SESSION['name'] . "</b></a></button>
                            <div class='dropdown-menu'>
                                <a href='$address1' class='dropdown-item' style=''><div class='dropdown-item-text'><i class='fa fa-user'></i>Dashboard</div></a>
                                <a href='$address2' type='button' class='btn dropdown-footer' style='color:black;'><div class='dropdown-item-text'>Logout</div></a>
                            </div>
                            </div>
                        </div>";
    } elseif ($_SESSION['type'] == 'customer') {
        echo " <div class='nav-item'>
                            <div class='dropdown' style='width:150px'>
                            <button class='btn dropdown-toggle' data-bs-toggle='dropdown'><i class='fa fa-user fa-2X'></i>".$_SESSION['name'] . "</button>
                            <div class='dropdown-menu'>
                                <!--<a href='account.php' class='dropdown-item'><div class='dropdown-item-text'><i class='fa fa-user'></i> My Account</div></a>-->
                                <a href='$orderLink' class='dropdown-item' style='color: black;'><div class='dropdown-item-text'><i class='fa fa-box'></i> Orders</div></a>
                                <a href='https://wa.me/23409061887329' class='dropdown-item' style='color: black;'><div class='dropdown-item-text'><i class='fa fa-message'></i> Message</div></a>
                                <a href='$logout' type='button' class='btn dropdown-item' style='color:black;'><div class='dropdown-item-text'><i class=''></i> Logout</div></a>
                            </div>
                            </div>
                        </div>";
    }
} else {
    echo "
    <div class='nav-item'>
        <a href='$loginLink' type='button' class='btn dropdown-header' style='color:black'><i class='fa fa-user fa-2x'></i></a>
    </div>";
}

?>