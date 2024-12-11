<?php require_once dirname(__DIR__) . "/admin/partials/head.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/nav.php" ?>
<?php require_once dirname(__DIR__) . "/admin/partials/aside.php" ?>
<main>
<?php require_once dirname(__DIR__) . "/admin/partials/nav2.php" ?>

  <h3 class="title">Add New Item</h3>
  <article class="formTheme">
    <form action="/admin/store/create" method="post" enctype="multipart/form-data" class="form">
      <div class="form-div">
        <div>
          <label for="name">Name</label><br>
          <input type="text" name="name" id="" class="form-input" />
        </div>
        <div>
          <label for="category">Category</label><br>
          <select name="category" id="" class="form-input">
            <option value="..."></option>
            <option value="local">Local Delicacies</option>
            <option value="foreign">Foreign Delicacies</option>
            <option value="drinks">Drinks</option>
            <option value="fast food">Fast food</option>
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
    <h3 class="title">Item Lists</h3>
    <table class="table">
      <thead>
        <th>Item ID</th>
        <th>Item Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Disount</th>
        <th>Status</th>
        <th>Action</th>
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
              <td>
                <form action="" method="get">
                  <input type="hidden" name="del_id" value="<?= $item['id'] ?>">
                  <input type="submit" value="delete" class="pill red del">
                </form>
              </td>
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