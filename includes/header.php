<!-- HEADER SECTION -->
<header class="header">
    <div class="header--list">
        <a href="index.php" class="header__logo">فروشگاه آنلاین</a>
        <div class="header__input-container">
            <input type="text" class="header__input" placeholder="جستجو در سایت آنلاین شاپ ..." />
            <i class="fa fa-search header__icon"></i>
        </div>
    </div>

    <ul class="header--list">
        <li class="header__item">
            <a class="header__link" href="index.php">خانه</a>
        </li>
        <?php if (isset($_SESSION['email'])) : ?>
            <li class="header__item">
                <a class="header__link" href="create-blog.php">ساخت مقاله</a>
            </li>
            <?php if ($_SESSION['email'] === 'hosein.keramati@gmail.com') : ?>
                <li class="header__item">
                    <a class="header__link" href="create-product.php">ساخت محصول</a>
                </li>
                <li class="header__item">
                    <a class="header__link" href="dashboard.php">داشبورد</a>
                </li>
            <?php endif ?>
            <li class="header__item">
                <a class="header__link" href="logout.php" id="signup-btn">خروج</a>
            </li>
            <li class="header__item">
                <a class="header__link" href="bucket.php">سبد خرید</a>
            </li>
        <?php else : ?>
            <li class="header__item">
                <a class="header__link" href="login.php" id="signup-btn">ورود</a>
            </li>
            <li class="header__item">
                <a class="header__link" href="signup.php">ثبت نام</a>
            </li>
        <?php endif ?>

    </ul>
</header>