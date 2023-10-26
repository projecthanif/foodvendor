<?php
require dirname(__DIR__) . '/app/path.php';

require APP_PATH . 'Database.php';

$orders = new Database();

$lists = $orders->getList('SELECT * FROM order_items');

$users = new Database();

$usersList = $orders->getList('SELECT * FROM users');


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/css/dash_style.css" />
  <link rel="shortcut icon" href="assets/img/bowl.png" type="image/x-icon" />
  <title>dashboard</title>
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
      <h3 class="title-page">ORDER LIST</h3>
      <p>
        <i>Home</i> /
        <a href="#" class="link"> Order List </a>
      </p>
    </article>
    <!-- <article class="list">

    </article> -->
    <section class="table-row">
      <h3 class="title">Order Lists</h3>
      <table class="table">
        <thead>
          <th>Customer ID</th> 
          <!-- <th>Customer name</th> -->
          <th>Order ID</th>
          <th>Product name</th>
          <th>Price</th>
          <th>Status</th>
        </thead>
        <tbody>
          <?php
          if (!empty($lists)) :
            foreach ($lists as $list) :
          ?>
              <tr>
                <td><?= $list['useruniqid']?></td>
                <!-- <td><?= $list['id'] ?></td> -->
                <td><?= $list['name'] ?></td>
                <td><?php //$list['product'] ?></td>
                <td><?= $list['price'] ?></td>
                <?php if ($list['payment_status'] === 'paid') : ?>
                  <td>
                    <p class="pill green"><?= $list['payment_status'] ?></p>
                  </td>
                <?php elseif ($list['payment_status'] === 'pending') : ?>
                  <td>
                    <p class="pill orange"><?= $list['payment_status'] ?></p>
                  </td>
                <?php else : ?>
                  <td>
                    <p class="pill red"><?= $list['payment_status'] ?></p>
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