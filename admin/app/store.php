<?php

require dirname(__DIR__) . '/app/path.php';

require APP_PATH . 'Database.php';

$item = new Database();

$itemList = $item;

$items = $itemList->getList('SELECT * FROM food_items');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $category = $_POST['category'];
  $price = $_POST['price'];
  $discount = $_POST['discount'];
  $description = $_POST['description'];
  $file = $_FILES['image'];
  $file_name = $_FILES['image']['name'];


  if (isset($name) && isset($category) && isset($price) && isset($description) && isset($file_name)) {

    if (isset($_POST['submit'])) {
      $file_upload = $item->uploadFile($file);
      $file_name = $file_upload['1'];

      if ($file_upload[0] === true) {
        $upload = $item->addFoodItem(
          $name,
          $category,
          $description,
          (int)$price,
          (int)$discount,
          $file_name
        );
        if ($upload === true) echo 'Uploaded';
      }
    }
  }

  exit;
}
