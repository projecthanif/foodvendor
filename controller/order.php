<?php

session_start();

use Database\Connection;
$conn = (new Connection())->getConn();


$id = $_REQUEST['id'] ?? '';
$price = $_REQUEST['price'] ?? '';
$product_name = $_REQUEST['name'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_SESSION['id'])) {
    $user_uniq_id = $_SESSION['id'];
    $user_name = $_SESSION['name'];

    $orderRequest = $conn->prepare("INSERT INTO order_items(
      id,
      product_name,
      name, 
      useruniqid, 
      price) VALUE(?,?,?,?,?)");

    $orderRequest->bind_param('sssss', $id, $product_name, $user_name, $user_uniq_id, $price);

    if ($orderRequest->execute()) {
    } else {
      echo "<script> alert('failed') </script>";
    }
  }
}
