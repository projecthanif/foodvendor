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


function get_user_info($conn, $sId) {
    $query = $conn->query("SELECT * FROM users WHERE id = '{$sId}'");

    if (mysqli_num_rows($query) > 0) {
        $userinfo = mysqli_fetch_assoc($query);
        return $userinfo;
    }
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
