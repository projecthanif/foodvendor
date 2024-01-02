<?php


// sql to create user table
$sql = "CREATE TABLE users (
    user_id VARCHAR(255) NOT NULL UNIQUE,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) UNIQUE,
    phone VARCHAR(50),
    is_verified VARCHAR(5) DEFAULT 'false',
    is_active VARCHAR(50) DEFAULT 'false',
    user_address VARCHAR(250)  DEFAULT ' ',
    token VARCHAR(200),
    user_password VARCHAR(200),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    type VARCHAR(10) DEFAULT 'customer'
    )";

// $return = $create->createTable($sql);
// if ($return === true) {
//     echo "Table Created successfully <br />";
// } else {
//     echo "Table failed";
// }

// sql to create food_item table
$createFoodItemSQL = "CREATE TABLE food_items (
    id INT(50) NOT NULL AUTO_INCREMENT,
    food_id VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL,
    category VARCHAR (200) NOT NULL,
    description VARCHAR(50),
    price VARCHAR(50),
    discount VARCHAR(50),
    is_available VARCHAR(5) DEFAULT 'true',
    image_url VARCHAR(50),
    date_uploaded TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(id));
)";

// $return = $create->createTable($createFoodItemSQL);

// if ($return === true) {
//     echo "Table Created successfully <br />";
// } else {
//     echo "Table failed";
// }


$createOrderSQL = "CREATE TABLE order_items (
    id INT(100) NOT NULL AUTO_INCREMENT,
    item_id VARCHAR(50) NOT NULL,
    product_name VARCHAR(50) NOT NULL,
    name VARCHAR(50) NOT NULL,
    useruniqid VARCHAR(50) NOT NULL,
    price VARCHAR(50),
    discount VARCHAR(50),
    payment_status VARCHAR(20) DEFAULT 'pending',
    date_uploaded TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
    )";

// $return = $create->createTable($createOrderSQL);

// if ($return === true) {
//     echo "Table Created successfully <br />";
// } else {
//     echo "Table failed";
// }


$createAddressItemSql = "CREATE TABLE address (
user_id VARCHAR(50) NOT NULL,
name VARCHAR(50) NOT NULL,
email VARCHAR(50) NOT NULL,
street_address VARCHAR(100) NOT NULL,
zip_code VARCHAR(20) NOT NULL,
city VARCHAR(50) NOT NULL,
country VARCHAR(50) NOT NULL,
number VARCHAR(20) NOT NULL
)";


// $return = $create->createTable($createAddressItemSql);

// if ($return === true) {
//     echo "Table Created successfully <br />";
// } else {
//     echo "Table failed";
// }
