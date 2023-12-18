<div class="menu-item">
    <div class="card">
        <div class="card-img">
            <img src="<?= $img_url ?>" alt="" class="card-img" />
        </div>
        <div class="card-body">
            <div class="card-body-title"><?= $name ?></div>
            <div class="card-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
        </div>
        <div class="card-foot">
            <div class="card-price">$<?= $price ?></div>
            <form action="/shop/cart" method="post">
                <input type="hidden" name="id" value="<?= $id ?>">
                <button class="cart-img">
                    <i class="fa fa-bag-shopping"></i>
                </button>
            </form>
        </div>
    </div>
</div>