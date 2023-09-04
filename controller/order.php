<?php

session_start();

$orderId = $_REQUEST['productId'] ?? '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  if (isset($_SESSION['id']))
  {
    $sessionId = $_SESSION['id'];
    $orderRequest = $conn->prepare("INSERT INTO user_order(userid, productid) VALUE(?,?)");

    $orderRequest->bind_param('ss', $sessionId, $orderId);

    if ($orderRequest->execute())
    {

    }
    else 
    {
      echo "failed";
    }
    
  }
}



?>