<?php
require '../app/path.php';

require APP_PATH . 'Database.php';

$usersList = new Database();

$users = $usersList->getList('SELECT * FROM items');

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
      <li>
        <form action="" class="form">
          <label for="search">
            <input type="text" class="form-input" placeholder="Search" />
            <button class="btn-form">
              <i class="fa fa-search"></i>
            </button>
          </label>
        </form>
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
    <article class="addList">

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
                <td><?= $item['itemId'] ?></td>
                <td><?= $item['itemName'] ?></td>
                <td><?= $item['category'] ?></td>
                <td><?= $item['itemPrice'] ?></td>
                <td><?= $item['itemDiscount'] ?></td>
                <?php if ($list['status'] === 'available') : ?>
                  <td>
                    <p class="pill green"><?= $item['status'] ?></p>
                  </td>
                <?php else : ?>
                  <td>
                    <p class="pill red"><?= $item['status'] ?></p>
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