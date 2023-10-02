<?php

require('../connection/connect.php');

$query = $conn->query('SELECT * FROM users');

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link rel="stylesheet" href="../assets/css/dStyle.css">
  <link rel="shortcut icon" href="../assets/img/bowl.png" type="image/x-icon" />
  <title>Food Vendor</title>
</head>

<body>
  <nav id="nav" class="navbar-large">
    <a href="../index.php">
      <img src="../assets/img/bowl.png" alt="" class="nav-brand" />
    </a>
    <button class="btn-nav" id="navToggle" onclick="showNav()">
      <i class="fa fa-bars fa-2x"></i>
    </button>
    <ul class="navbar" id="navbar">
      <li class="nav-item">
        <form action="#" class="form">
          <label for="search">
            <input type="text" class="form-input" placeholder="Search" name="search" />
            <button class="btn-form">
              <i class="fa fa-search"></i>
            </button>
          </label>
        </form>
      </li>
      <button class="btn-nav" id="close" onclick="closeNav()">
        <i class="fa-solid fa-xmark"></i>
      </button>
    </ul>
    <ul class="navbar list">
      <li class="nav-item">
        <a href="user.php" class="nav-link">
          <i class="fa-regular fa-user fa-2x"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa-regular fa-heart fa-2x"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="cart.php" class="nav-link">
          <i class="fa fa-bag-shopping fa-2x"></i>
        </a>
      </li>
    </ul>
  </nav>
  <main>
    <section class="body">
      <aside class="aside">
        <a href="dashboard.html" class="nav-link" active><i class="fa fa-user"></i> Profile</a>
        <a href="user.php" class="nav-link"><i class="fa fa-users"></i> Users</a>
        <a href="order.php" class="nav-link">Orders</a>
        <a href="store.php" class="nav-link">Store</a>
      </aside>
      <section class="section body">
        <table class="table">
          <thead>
            <th>Customer Id</th>
            <th>Customer name</th>
            <th>Mobile</th>
            <th>Email</th>
          </thead>
          <?php
          if (mysqli_num_rows($query) > 0) :
            while ($userInfo = $query->fetch_assoc()) :
          ?>
              <tbody>
                <td><?= $userInfo['userid'] ?></td>
                <td><?= $userInfo['username'] ?></td>
                <td><?= $userInfo['user_number'] ?></td>
                <td><?= $userInfo['user_email'] ?></td>
              </tbody>
          <?php
            endwhile;
          endif;
          ?>
        </table>
      </section>
    </section>
  </main>

  <script src="../assets/js/app.js"></script>
</body>

</html>