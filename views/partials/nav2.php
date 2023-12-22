<nav id="nav" class="navbar-large">
    <a href="/">
        <img src="../assets/img/bowl.png" alt="" class="nav-brand" />
    </a>
    <button class="btn-nav" id="navToggle" onclick="showNav()">
        <i class="fa fa-bars fa-2x"></i>
    </button>
    <ul class="navbar list">
        <li class="nav-item">
            <a href="/user" class="nav-link">
                <i class="fa-regular fa-user fa-2x"></i>
            </a>
        </li>
        <?php
        if (@$_SESSION['type'] === 'admin') :
        ?>
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link">
                    <i class="fa-regular fa-heart fa-2x"></i>
                </a>
            </li>
        <?php
        endif;
        ?>
        <li class="nav-item">
            <a href="/user/cart" class="nav-link">
                <i class="fa fa-bag-shopping fa-2x"></i>
            </a>
        </li>
    </ul>
</nav>