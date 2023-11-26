<?php require dirname(__DIR__) . '/../' . '/views/partials/head2.php' ?>
<?php require dirname(__DIR__) . '/../' . '/views/partials/nav2.php' ?>

<main>
    <section class="link">
        <h4 class="links">
            <a href="/" class="nav-link"> Home </a>
            <p> > </p>
            <a href="/user/address" class="nav-link"> Address </a>
        </h4>
    </section>
    <section class="body">
        <?php require dirname(__DIR__) . '/../' . '/views/partials/sidebar.php' ?>

        <section class="section body address">
            <h1 class="title">Address</h1>
            <p class="text">Please enter a valid address</p>
            <form action="#" method="post" class="form-d">
                <label for="fullname">Full Name</label>
                <input type="text" name="name" id="" class="input" placeholder="<?= $user["name"] ?>">
                <label for="email address">Email Address</label>
                <input type="email" name="email" id="" class="input" placeholder="<?= $user["email"] ?>">
                <label for="street address">Street Address</label>
                <input type="text" name="street address" id="" class="input">
                <div class="z-city">
                    <div class="z-city-1">
                        <label for="zip code">Zip code</label><br>
                        <input type="number" name="zipcode" id="" class="input">
                    </div>
                    <div class="z-city-1">
                        <label for="city">City</label><br>
                        <input type="text" name="city" id="" class="input">
                    </div>
                </div>
                <label for="country">Country</label>
                <select name="country" id="" class="input">
                    <option value="Nigeria">Nigeria</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Niger">Niger</option>
                </select>
                <label for="number">Phone Number</label>
                <input type="number" name="number" id="" class="input" placeholder="<?= $user["phone"] ?>">
                <input type="submit" value="Submit" class="form-btn" disabled>
            </form>
        </section>
    </section>
</main>
<?php require dirname(__DIR__) . '/../' . '/views/partials/footer.php' ?>