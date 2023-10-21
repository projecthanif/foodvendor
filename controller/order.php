<?php

session_start();

$orderId = $_REQUEST['productId'] ?? '';
$quantity = 2;

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{

  if (isset($_SESSION['id']))
  {
    $sessionId = $_SESSION['id'];
    $orderRequest = $conn->prepare("INSERT INTO orders(
      customer, 
      orderId, 
      productName, 
      price) VALUE(?,?,?,?)");

    $orderRequest->bind_param('sssi', $sessionName, $sessionId, $orderId, $quantity);

    if ($orderRequest->execute())
    {
      
    }
    else 
    {
      echo "failed";
      dd(null);
    }
    
  }
}

?>