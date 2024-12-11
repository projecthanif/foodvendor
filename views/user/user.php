<?php require dirname(__DIR__) . '/../' . '/views/partials/head2.php' ?>
<?php require dirname(__DIR__) . '/../' . '/views/partials/nav2.php' ?>

<main>
    <section class="link">
        <h4 class="links">
            <a href="/" class="nav-link"> Home </a>
            <p> > </p>
            <a href="/user" class="nav-link"> Account</a>
        </h4>
    </section>
    <section class="body">
        <?php require dirname(__DIR__) . '/../' . '/views/partials/sidebar.php' ?>
        <section class="section body">
            <article class="user_info">
                <div class="user">
                    <h1 class="img"><?= strtoupper($_SESSION['name'][0]) ?? '' ?></h1>
                    <h3 class="user_name"> <?= $_SESSION['name'] ?? '' ?> </h3>
                </div>
            </article>
            <article class="order section">
                <div class="order title">
                    <h4 class="title">My Orders</h4>
                    <a href="/user/cart" class="order-link">View All > </a>
                </div>
            </article>
        </section>
    </section>
</main>
<?php require dirname(__DIR__) . '/../' . '/views/partials/footer.php' ?>