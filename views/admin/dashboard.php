<?php require_once dirname(__DIR__) . "/admin/partials/head.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/nav.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/aside.php" ?>
<main>
  <?php require_once dirname(__DIR__) . "/admin/partials/nav2.php" ?>
  <section class="info">
    <div class="info-card">
      <h3 class="info-title">EARNINGS (ANNUAL)</h3>
      <h2 class="info-info">23,000</h2>
    </div>
    <div class="info-card">
      <h3 class="info-title">NUMBER OF PRODUCT</h3>
      <h2 class="info-info"><?= $item ?></h2>
    </div>
    <div class="info-card">
      <h3 class="info-title">NUMBER OF CUSTOMER</h3>
      <h2 class="info-info"><?= $customer ?></h2>
    </div>
    <div class="info-card">
      <h3 class="info-title">NUMBER OF ORDER PLACED</h3>
      <h2 class="info-info"><?= $order ?></h2>
    </div>
  </section>
</main>

<?php require_once dirname(__DIR__) . "/admin/partials/foot.php" ?>