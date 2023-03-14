<?php
include_once('../html/header.html');
require_once('../connection/connect.php');
if ($_SESSION) {
  echo "          <div class='container mt-2'>
  <div class='row mb-2 g-2'> ";

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
                      <div class='col-sm-12 col-md-4 col-lg-3'>
                        <div class='card' style='width:250px;height:%;'>
                            <div class='card-header' style='text-align:center'>
                                <div class='card-text'>$name</div>
                            </div>
                            <div class='card-img'>
                                  <img src='../imgupload/$pic' width='250px' height='200px' style='thumbnail' class='card-img'>
                            </div>
                          <div class='card-body' style='text-align:center'>
                            <div class='card-text'>Price: <del>N</del> $price</div><br>
                          </div>
                          <div class='card-footer'>
                            <form action='' method='post'>
                              <input type='hidden' name='del' value='$time'>
                              <input value='Cancel' type='submit' class='btn btn-outline-danger' style='border-radius:3px'>
                            </form>
                          </div>
                        </div>        
                      </div> 
                     
                    ";

      }
    }
  }
  echo"</div></div>";

} else {
  header("Location: index.php");
}

include_once('../html/foot.html');
?>