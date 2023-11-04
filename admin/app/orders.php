<?php

require dirname(__FILE__) . '/./' . 'path.php';

use App\Database;

$orders = new Database();
$lists = $orders->getList('SELECT * FROM order_items');

$users = new Database();
$usersList = $orders->getList('SELECT * FROM users');