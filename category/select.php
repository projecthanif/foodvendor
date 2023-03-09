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
                      
        <div class='col-sm-3 col-md-5 col-lg-3'>
        <div class='container'>
        <div class='card m-2' style='width:250px;heigh:%;'>
        <div class='card-header' style='text-align:center'>
        <div class='card-text'>$name</div></div>
        <div class='card-img'>
        <img src='../imgupload/$img' width='250px' height='200px' style='thumbnail'>
        </div>
        <div class='card-body' style='text-align:center'>
        <div class='card-text'>Price: <del>N</del> $price</div><br>
        </div>
        <div class='card-footer'>
        <form action='' method='post'>
        <input type='hidden' name='id' value='$id'>
        <button  class='btn btn-success' style='border-radius:3px;color:white;'>Add to cart <i class='fa fa-shopping-cart'></i></button>
        </form>
        </div>
        </div></div></div>
       TEXT;
        if (empty($img && $details && $name)) {

        } else {
            echo $heredoc;

        }

    }
}




?>