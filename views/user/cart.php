<?php require dirname(__DIR__) . '/../' . '/views/partials/head2.php' ?>
<?php require dirname(__DIR__) . '/../' . '/views/partials/nav2.php' ?>

<main>
    <section class="link">
        <h4 class="links">
            <a href="/" class="nav-link"> Home </a>
            <p> > </p>
            <a href="/user/cart" class="nav-link"> Cart</a>
        </h4>
    </section>
    <section class="body">
        <?php require dirname(__DIR__) . '/../' . '/views/partials/sidebar.php' ?>
        <section class="section body">
            <section class="cart box">
                <h3 class="cart box title">Shopping Cart</h3>
                <div class="cart container">
                    <div class="cart table">
                        <table>
                            <thead>
                                <th class="th-first">Items</th>
                                <!-- <th class="th-second">Quantity</th> -->
                                <th class="th-third">Price</th>
                                <th class="th-fourth"></th>
                            </thead>
                            <tbody>
                                <!-- <?php
                                        foreach ($lists as $list) :
                                            $name = $list['product_name'];
                                            $price = $list['price'];
                                        ?>
                                        <tr>
                                            <td><?= $name ?></td>
                                            <!-- <td>1</td> -->
                                <td><del>N</del><?= $price ?></td>
                                <td></td>
                                </tr>
                            <?php
                                        endforeach
                            ?> -->
                            </tbody>
                        </table>
                    </div>
                    <div class="cart summary">
                        <h2 class="s-title">Order Summary</h2>
                        <hr>
                        <div class="order-price">
                            <div class="type-price">
                                <h5 class="name">
                                    Item (<?= $count ?? '' ?>)
                                </h5>
                                <p class="price">
                                    <del>N</del> <?= $total ?? '' ?>
                                </p>
                            </div>
                            <div class="type-price">
                                <h5 class="name">
                                    Discount
                                </h5>
                                <p class="price">
                                    <del>N</del> 0
                                </p>
                            </div>
                            <div class="type-price">
                                <h5 class="name">
                                    Subtotal
                                </h5>
                                <p class="price">
                                    <del>N</del> <?= $total ?? '' ?>
                                </p>
                            </div>
                            <div class="type-price two">
                                <h5 class="name">
                                    Estimated Delivery
                                </h5>
                                <p class="price">
                                    <del>N</del> 0
                                </p>
                            </div>
                            <div class="type-price">
                                <h5 class="name">
                                    Estimated Tax
                                </h5>
                                <p class="price">
                                    <del>N</del> 0
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="amount-total">
                            <h1 class="title">Order Value</h1>
                            <p class="price">
                                <del>N</del> <?= $total ?? '' ?>
                            </p>
                        </div>
                        <button class="btn-check">Checkout</button>
                    </div>
                </div>
            </section>
        </section>
    </section>
</main>
<?php require dirname(__DIR__) . '/../' . '/views/partials/footer.php' ?>