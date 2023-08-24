<?php

require_once('../connection/connect.php');

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  $item_name = $_POST['name'] ?? '';
  $item_details = $_POST['details'] ?? '';
  $item_price = $_POST['price'] ?? '';
  $item_type = $_POST['type'] ?? '';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['submit'])) {

      $pic = $_FILES['file']['name'];
      $pic_tmp = $_FILES['file']['tmp_name'];
      $extension = array('png', 'jpg', 'jpeg');
      $ext = explode('.', $pic);
      $end = end($ext);

      if (!in_array($end, $extension)) {

        echo 'png,jpg,jpeg only';

      }

      $pic_name = "IMG-" . rand(1000, 2000) . '.' . $end;
      move_uploaded_file($pic_tmp, "../imgupload/" . $pic_name);


      if (empty($item_name && $item_price)) {

        header('Location:catalog.php');
        exit;

      } else {

        $sql = 'INSERT INTO item_order(item_Name,item_Img,item_Details,item_Price,item_type)
    VALUES(?,?,?,?,?)';
        $result = $conn->prepare($sql);

        $result->bind_param('sssis', $item_name, $pic_name, $item_details, $item_price, $item_type);

        if ($result->execute()) {

          header('Location:catalog.php');
          exit;

        } else {
          header("Location:index.php");
        }
      }
    }

  }
} else {
  header("Location: catalog.php");
}
