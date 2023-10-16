<?php

require '../connection/connect.php';

if (!isset($_SESSION)) {
    header('Location: ../index.php');
}
else print_r($_SESSION);