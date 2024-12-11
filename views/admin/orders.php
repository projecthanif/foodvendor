<?php require_once dirname(__DIR__) . "/admin/partials/head.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/nav.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/aside.php" ?>
  <main>
  <?php require_once dirname(__DIR__) . "/admin/partials/nav2.php" ?>

    <section class="table-row">
      <h3 class="title">Order Lists</h3>
      <table class="table">
        <thead>
          <th>Customer ID</th> 
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
                <td><?= $list['item_id'] ?></td>
                <td><?= $list['product_name'] ?></td>
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
  <?php require_once dirname(__DIR__) . "/admin/partials/foot.php" ?>
