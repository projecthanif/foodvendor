<?php
require dirname(__FILE__) . '/./' . 'path.php';

use App\Database;

$usersList = new Database();
$users = $usersList->getList("SELECT * FROM users WHERE type='customer'");
