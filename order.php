<?php
// session_start();
require_once('connection/connect.php');
if ($_SESSION) {
  include_once('header.html');
  echo "           <div class='container-fluid'>
                <div class='container-fluid m-3'>
                <div class='row mb-2 g-2'>";

  $order_name = $_SESSION['name']; // accessing username currently log in using session                    

  /** @var $SQL
   *  Accessing the users data 
   *from the database system using the name gotten 
   *from the session
   * @var $id  
   * 
   **/
  $SQL = "SELECT * FROM users
                       WHERE user_fname='$order_name'";
  $resul = $conn->query($SQL);
  $user = $resul->fetch_assoc();
  $id = $user['userid'];

  /** @var $sql
   * using $id gotten from 
   * $SQL to access the foreign key 
   * in user_order 
   * 
   */

  $sql = "SELECT * FROM user_order
                      WHERE userid=$id;";
  $result = $conn->query($sql);
  if (mysqli_num_rows($result) > 0) {
    while ($item = $result->fetch_assoc()) {
      $product = $item['productid'];
      $time = $item['timeofpurchase'];
      /** @var $data
       * getting the product id 
       */

      $data = "SELECT * FROM item_order
                             WHERE productid=$product";
      $order = $conn->query($data);
      $product_order = $order->fetch_assoc();
      if (empty(mysqli_query($conn, $data))) {
        echo "This is fun";

      } else {
        $pic = $product_order['item_Img'];
        $name = $product_order['item_Name'];
        $details = $product_order['item_Details'];
        $price = $product_order['item_Price'];

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
          $not = $_POST['del'];
          /** @var $del 
           * use a sql code to delete the users order
           * from the database
           *
           * 
           */
          $del = "DELETE FROM user_order
                      WHERE timeofpurchase='$not';";
          $conn->query($del);
        }
        echo "                            
                    <div class='col-sm-4 col-md-4 col-lg-3'>
                    <div class='card' style='width:250px;height:%;'>
                    <div class='card-img'>
                    <img src='imgupload/$pic' width='250px' height='200px' style='thumbnail'>
                    </div>
                    <div class='card-body'>
                    <div class='card-text'><b>$name</b></div>
                    <div class='card-text'>$details</div><br>
                    <div class='card-text'>$ $price</div>
                    <form action='' method='post'>
                    <input type='hidden' name='del' value='$time'>
                    <input value='Cancel' type='submit' class='btn btn-outline-danger'>
                    </form>
                    </div>        
                    </div>
                    </div> 
                    ";

      }
    }
  }

  include_once('foot.html');
} else {
  header("Location: index.php");
}
?>