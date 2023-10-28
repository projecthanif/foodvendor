<?php
session_start();
require dirname(__FILE__) . "/../" . "connection/Connection.php";


use Connection\Connection;
function get_list($conn, $uniqid)
{

    $item = [];
    $lists = $conn->query("SELECT * FROM order_items WHERE useruniqid = '$uniqid'");

    if (mysqli_num_rows($lists) > 0) {
        while ($list = $lists->fetch_assoc()) {
            $item[] = $list;
        }
    }

    return ($item);
}


$conn = (new Connection())->getConnection();

$lists = get_list($conn, $_SESSION['id']);
$amount = get_list($conn, $_SESSION['id']);

$amount_arr = [];

foreach ($amount as $totalPrice) {
    $amount_arr[] = $totalPrice['price'];
}

$count = count($amount_arr);
$total = array_sum($amount_arr);
