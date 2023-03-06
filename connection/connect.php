<?php

define('HOST','localhost');
define('HOSTNAME','root');
define('PASSWORD','');
define('DATABASENAME','admin');


$conn=mysqli_connect(HOST,HOSTNAME,PASSWORD,DATABASENAME);

if(mysqli_connect_error()){
    die('Connection Error');
}

?>