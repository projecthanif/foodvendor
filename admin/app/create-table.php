<?php
require 'Database.php';

$create = new Database();

// sql to create table
$sql = "CREATE TABLE users (
id VARCHAR(255) NOT NULL,
name VARCHAR(30) NOT NULL,
email VARCHAR(50),
phone VARCHAR(50),
is_verified VARCHAR(5) DEFAULT 'false',
is_active VARCHAR(50) DEFAULT 'false',
user_address VARCHAR(250)  DEFAULT ' ',
token VARCHAR(200),
user_password VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// $return = $create->createQuery($sql);

// if ($return === true) {
//     echo "Table Created successfully <br />";
// } else {
//     echo "Table failed";
// }



$createFoodItemSQL = "CREATE TABLE food_items (
id VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
category VARCHAR (200) NOT NULL,
description VARCHAR(50),
price VARCHAR(50),
discount VARCHAR(50),
-- restaurant_token VARCHAR(50),
is_available VARCHAR(5) DEFAULT 'true',
image_url VARCHAR(50),
date_uploaded TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// $return = $create->createQuery($createFoodItemSQL);

// if ($return === true) {
//     echo "Table Created successfully <br />";
// } else {
//     echo "Table failed";
// }


$createOrderSQL = "CREATE TABLE order_items (
id VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
useruniqid VARCHAR(50) NOT NULL,
-- description VARCHAR(50),
price VARCHAR(50),
discount VARCHAR(50),
payment_status VARCHAR(20) DEFAULT 'pending',
date_uploaded TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// $return = $create->createQuery($createOrderSQL);

// if ($return === true) {
//     echo "Table Created successfully <br />";
// } else {
//     echo "Table failed";
// }
