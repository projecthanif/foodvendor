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
  <link rel="stylesheet" href="../assets/css/dStyle.css" />
  <link rel="shortcut icon" href="../assets/img/bowl.png" type="image/x-icon">
  <title>Customers Page</title>
</head>

<body>
  <nav id="nav">
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
            <input type="text" class="form-input" placeholder="Search" />
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
        <a href="#" class="nav-link">
          <i class="fa fa-bell fa-2x"></i>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-user fa-2x"></i>
          <h6 class="username">John Doe</h6>
        </a>
      </li>
      <!-- <li class="nav-item">
            <a href="#" class="nav-link">
            </a>
          </li> -->
    </ul>
  </nav>

  <main>
    <aside class="aside">
      <ul class="asidelist">
        <li class="asideItem">
          <a href="#"><i class="fa fa-user"></i> Profile</a>
        </li>
        <li class="asideItem">
          <a href="user.php"><i class="fa fa-user"></i> Users</a>
        </li>
        <li class="asideItem">
          <a href="order.php">Orders</a>
        </li>
        <li class="asideItem">
          <a href="#">Store</a>
        </li>
      </ul>
    </aside>
    <section class="body">
      <table class="table">
        <thead>
          <th>Customer Id</th>
          <th>Customer Name</th>
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
  </main>

  <script src="../assets/js/app.js"></script>
</body>

</html>