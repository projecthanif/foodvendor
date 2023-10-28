<?php

session_start();

use Connection\Connection;
$conn = (new Connection())->getConnection();


$item_id = $_REQUEST['id'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  $searchQ = $conn->query("SELECT * FROM food_items WHERE id = '$item_id'");

  if ($searchQ->num_rows > 0) {
    $result = ($searchQ->fetch_assoc());
    $price = $result['price'];
    $product_name = $result['name'];
  }

  $id = uniqid('#');


  if (isset($_SESSION['id'])) {
    $user_uniq_id = $_SESSION['id'];
    $user_name = $_SESSION['name'];

    $orderRequest = $conn->prepare("INSERT INTO order_items(
      id,
      item_id,
      product_name,
      name, 
      useruniqid, 
      price) VALUE(?,?,?,?,?,?)");

    $orderRequest->bind_param('ssssss', $id, $item_id, $product_name, $user_name, $user_uniq_id, $price);

    if ($orderRequest->execute()) {
    } else {
      echo "<script> alert('failed') </script>";
    }
  }
}
