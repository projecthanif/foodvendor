<?php

session_start();

$orderId = $_REQUEST['productId'] ?? '';
$quantity = 2;

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{

  if (isset($_SESSION['id']))
  {
    $sessionId = $_SESSION['id'];
    $orderRequest = $conn->prepare("INSERT INTO user_order(userid, productid, quantity) VALUE(?,?,?)");

    $orderRequest->bind_param('ssi', $sessionId, $orderId, $quantity);

    if ($orderRequest->execute())
    {
      http_response_code(404);
    }
    else 
    {
      echo "failed";
      dd(null);
    }
    
  }
}

?>