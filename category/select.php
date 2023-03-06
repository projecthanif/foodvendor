<?php
/**
 * @var $get used to get
 * the @var $id from table item_order that will be inserted into table user_order 
 *
 *         */
$get = "SELECT * FROM item_order
      WHERE item_type='$type'";
$result = $conn->query($get);
if (mysqli_num_rows($result)) {
    while ($out = $result->fetch_assoc()) {
        $name = $out['item_Name'];
        $price = $out['item_Price'];
        $img = $out['item_Img'];
        $details = $out['item_Details'];
        $id = $out['productid'];


        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            /** */
            $UserName= $_SESSION['name'] ?? '';
            $SQL = "SELECT * FROM users
    WHERE user_fname='$UserName'";
            $re = $conn->query($SQL);
            $ou = $re->fetch_assoc();
            $num = $ou['userid'];

            /**
             * @var $sql sql query to get insert 
             * 
             */
            if (isset($_POST['id'])) {
                $itemId = $_POST['id'];
                $sql = "INSERT INTO user_order(userid,productid)
    VALUE($num,$itemId)";
                $conn->query($sql);

            }

        } else {

        }
        $heredoc = <<<TEXT
                      
          <div class='col-sm-3'>
          <div class='container'>
          <div class='card m-2' style='width:250px;heigh:%;'>
          <div class='card-img'>
          <img src='../imgupload/$img' width='250px' height='200px' style='thumbnail'>
          </div>
          <div class='card-body'>
          <div class='card-text'><b>$name</b></div>
          <div class='card-text'>$details</div><br>
          <div class='card-text'>$ $price</div>
          <form action='' method='post'>
          <input type='hidden' name='id' value='$id'>
          <input value='ORDER' type='submit' class='btn btn-outline-primary'>
          </form>
          </div></div></div></div>
       TEXT;
        if (empty($img && $details && $name)) {

        } else {
            echo $heredoc;

        }

    }
}




?>