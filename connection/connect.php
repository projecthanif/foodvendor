<?php

define('HOST', 'localhost');
define('HOSTNAME', 'root');
define('PASSWORD', '');
define('DataBaseName', 'foodvendor');


$conn = mysqli_connect(HOST, HOSTNAME, PASSWORD, DataBaseName);

if (mysqli_connect_error()) {
    die('Connection Error');
}

?>