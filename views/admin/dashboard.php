<?php require_once dirname(__DIR__) . "/admin/partials/head.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/nav.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/aside.php" ?>
<main>
  <article class="title">
    <h3 class="title-page">ORDER LIST</h3>
    <p>
      <i>Home</i> /
      <a href="#" class="link"> Order List </a>
    </p>
  </article>
  <article class="list">

  </article>
  <section class="table-row">
    <h3>Order Lists</h3>
    <table class="table">
      <thead>
        <th>Customer</th>
        <th>Order ID</th>
        <th>Product</th>
        <th>Price</th>
        <th>Status</th>
      </thead>
      <tbody>
        <tr>
          <td>Mustapha Ibrahim</td>
          <td>#102903</td>
          <td>Fried Rice</td>
          <td>$10</td>
          <td>Paid</td>
        </tr>
      </tbody>
    </table>
  </section>
</main>

<?php require_once dirname(__DIR__) . "/admin/partials/foot.php" ?>