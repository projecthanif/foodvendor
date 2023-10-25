<?php
require_once("../app/store.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/dash_style.css" />
  <link rel="shortcut icon" href="assets/img/bowl.png" type="image/x-icon" />
  <title>Dashboard</title>
</head>

<body>
  <nav>
    <ul class="nav">
      <li>
        <a href="#" class="img">
          <img src="assets/img/bowl.png" alt="" class="img" />
        </a>
      </li>
      <div class="nav-left">
        <li>
          <a href="#" class="nav-item">
            <i class="fa fa-bell"></i>
        </li>
        </a>
        <li>
          <a href="#" class="nav-item">
            <img src="assets/img/bowl.png" alt="" class="avatar sm">
          </a>
        </li>
        <li>
          <a href="#" class="nav-item">
            <!-- <i class="fa-solid fa-ellipsis"></i> -->
          </a>
        </li>
      </div>

    </ul>
  </nav>

  <aside class="aside">
    <li class="top">
      <a href="dashboard.html" class="side-nav-item">
        Dashboard
      </a>
    </li>

    <li>
      <a href="customer.php" class="side-nav-item">
        Customers List
      </a>
    </li>
    <li>
      <a href="orders.php" class="side-nav-item">
        Orders List
      </a>
    </li>
    <li>
      <a href="store.php" class="side-nav-item">
        Item Management
      </a>
    </li>
  </aside>
  <main>
    <article class="title">
      <h3 class="title-page">ITEM LIST</h3>
      <p>
        <i>Home</i> /
        <a href="#" class="link"> Item List </a>
      </p>
    </article>
    <h3 class="title">Add New Item</h3>
    <article class="formTheme">
      <form action="" method="post" enctype="multipart/form-data" class="form">
        <div class="form-div">
          <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="" class="form-input" />
          </div>
          <div>
            <label for="category">Category</label><br>
            <select name="category" id="" class="form-input">
              <option value="..."></option>
              <option value="Meal">Meal</option>
            </select>
          </div>
        </div>
        <div class="form-div">
          <div>
            <label for="price">Price</label><br>
            <input type="number" name="price" id="" class="form-input" />
          </div>
          <div>
            <label for="discount">Discount</label><br>
            <input type="number" name="discount" id="" class="form-input" />
          </div>
        </div>
        <label for="image">Image</label>
        <input type="file" name="image" id="" class="form-input">
        <label for="description">Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-textarea"></textarea><br>
        <button type="submit" name="submit" class="btn">upload</button>
      </form>
    </article>
    <section class="table-row">
      <h3>Item Lists</h3>
      <table class="table">
        <thead>
          <th>Item ID</th>
          <th>Item Name</th>
          <th>Category</th>
          <th>Price</th>
          <th>Disount</th>
          <th>Status</th>
        </thead>
        <tbody>
          <?php
          if (!empty($items)) :
            foreach ($items as $item) :
          ?>
              <tr>
                <td><?= $item['id'] ?></td>
                <td><?= $item['name'] ?></td>
                <td><?= $item['category'] ?></td>
                <td><?= $item['price'] ?></td>
                <td><?= $item['discount'] ?></td>
                <?php if ($item['is_available'] === 'true') : ?>
                  <td>
                    <p class="pill green"><?= $item['is_available'] ?></p>
                  </td>
                <?php else : ?>
                  <td>
                    <p class="pill red"><?= $item['is_available'] ?></p>
                  </td>
                <?php endif ?>
              </tr>
          <?php
            endforeach;
          endif;
          ?>
        </tbody>
      </table>
    </section>
  </main>
</body>

</html>