<?php require_once dirname(__DIR__) . "/admin/partials/head.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/nav.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/aside.php" ?>
  <main>
  <?php require_once dirname(__DIR__) . "/admin/partials/nav2.php" ?>

    <section class="table-row">
      <h3 class="title">Customer Lists</h3>
      <table class="table">
        <thead>
          <th>User ID</th>
          <th>Customer Name</th>
          <th>Email</th>
          <th>Mobile Number</th>
          <th>Type</th>
        </thead>
        <tbody>
          <?php
          if (!empty($users)) :
              foreach ($users as $user) :
                  ?>
              <tr>
                <td><?= $user['user_id'] ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['phone'] ?></td>
                <td><?= $user['type'] ?></td>
              </tr>
          <?php
              endforeach;
          endif;
?>

        </tbody>
      </table>
    </section>
  </main>
<?php require_once dirname(__DIR__) . "/admin/partials/foot.php" ?>
