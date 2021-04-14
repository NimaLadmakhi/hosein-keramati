<?php require_once __DIR__ . '/functions/main.php' ?>
<?php require_once __DIR__ . '/includes/head.php'  ?>
<?php require_once __DIR__ . '/includes/header.php' ?>

<!-- LANDING PAGE -->
<div class="landing">
    <div class="landing__content">
        <h1 class="landing__title">
            با کمترین هزینه و سریع ترین زمان محصول <br />
            خودتو سفارش بده و با استفاده ازش لذت ببر
        </h1>
    </div>
</div>

<!-- SECTION HEADER -->
<div class="header-section">
    <ul class="header-section__list">
        <?php foreach ($topics as $topic) : ?>
            <li class="header-section__item">
                <a href="#" class="header-section__link"><?= $topic->name ?></a>
            </li>
        <?php endforeach ?>
    </ul>
</div>

<!-- PRODUCTS SECTION -->

<div class="products">
    <div class="products__header">
        <h1 class="products__title"><?= array_keys($products)[0] ?></h1>
    </div>
    <div class="products__body swiper-container">
        <div class="swiper-wrapper">
            <?php foreach (array_values($products)[0] as $product) : ?>
                <a href="single.php?id=<?= $product->id ?>" style="text-decoration: none;" class="swiper-slide products__item">
                    <img class="products__image" src="<?= __DIR__ ?>/assets/images/<?= $product->image ?>" alt="" />
                    <h4 class="products__name">
                        <?= $product->title ?>
                    </h4>
                    <p class="products__price">
                        <?= number_format($product->price, 0, '.', ',') ?><span class="products__currency">تومان</span>
                    </p>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- PRODUCTS SECTION -->

<div class="products">
    <div class="products__header">
        <h1 class="products__title"><?= array_keys($products)[2] ?></h1>
    </div>
    <div class="products__body swiper-container">
        <div class="swiper-wrapper">
            <?php foreach (array_values($products)[2] as $product) : ?>
                <a style="text-decoration: none;" href="single.php?id=<?= $product->id ?>" class="swiper-slide products__item">
                    <img class="products__image" src="./assets/images/<?= $product->image ?>" alt="" />
                    <h4 class="products__name">
                        <?= $product->title ?>
                    </h4>
                    <p class="products__price">
                        <?= number_format($product->price, 0, '.', ',') ?><span class="products__currency">تومان</span>
                    </p>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- PRODUCTS SECTION -->

<div class="products">
    <div class="products__header">
        <h1 class="products__title"><?= array_keys($products)[1] ?></h1>
    </div>
    <div class="products__body swiper-container">
        <div class="swiper-wrapper">
            <?php foreach (array_values($products)[1] as $product) : ?>
                <a style="text-decoration: none;" href="single.php?id=<?= $product->id ?>" class="swiper-slide products__item">
                    <img class="products__image" src="./assets/images/<?= $product->image ?>" alt="" />
                    <h4 class="products__name">
                        <?= $product->title ?>
                    </h4>
                    <p class="products__price">
                        <?= number_format($product->price, 0, '.', ',') ?><span class="products__currency">تومان</span>
                    </p>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</div>


<div class="products">
    <div class="products__header">
        <h1 class="products__title">مقالب و مطالب آموزشی</h1>
    </div>
    <div class="products__body swiper-container products__body--blog">
        <div class="swiper-wrapper">
            <?php foreach ($blogs as $blog) : ?>
                <a style="text-decoration: none;" href="single.blog.php?id=<?= $blog->id ?>" class="swiper-slide products__item">
                    <img class="products__image" src="./assets/images/<?= $blog->image ?>" alt="" />
                    <h4 class="products__name">
                        <?= $blog->title ?> </h4>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</div>


<!-- BANNER SECTION -->
<div class="banner">
    <img src="./assets/images/bannerOne.jpg" alt="" class="banner__image" />
    <img src="./assets/images/bannerTwo.jpg" alt="" class="banner__image" />
</div>

<!-- PRODUCTS SECTION -->
<div class="products">
    <div class="products__header">
        <h1 class="products__title">منتخب جدیدترین کالا ها</h1>
    </div>
    <div class="products__body swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($recentlyProduct as $proRec) : ?>
                <div class="swiper-slide products__item">
                    <img class="products__image" src="./assets/images/<?= $proRec->image ?>" alt="" />
                    <h4 class="products__name">
                        <?= $proRec->title ?>
                    </h4>
                    <p class="products__price">
                        <?= number_format($proRec->price, 0, null, ',') ?> <span class="products__currency">تومان</span>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="footer">
    <p class="footer__text">
        این سایت حقوق مادی ندارد و برای نمونه کار توسط حسین کارامتی پیاده
        سازی شده است
    </p>
</footer>

<?php require_once __DIR__ . '/includes/end.php' ?>