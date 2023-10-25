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

  // echo "<pre>";
  // var_dump($_POST);
  // echo "<br />";

  if (isset($name) && isset($category) && isset($price) && isset($description) && isset($file_name)) {

    if (isset($_POST['submit'])) {
      $file_upload = $item->upload($file);

      if ($file_upload) {
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
