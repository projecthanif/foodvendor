<?php

session_start();
require('../connection/connect.php');

require('../function.php');


if (isset($_SESSION['name']))
{
    dd($_SESSION);
}
else{
    header('Location: ../validation/user_login.php');
}

