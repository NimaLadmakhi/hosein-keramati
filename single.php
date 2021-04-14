<?php require_once dirname(__DIR__) . '/app/functions/main.php' ?>
<?php require_once dirname(__DIR__) . '/app/includes/head.php' ?>
<?php require_once dirname(__DIR__) . '/app/includes/header.php' ?>

<div class="single">
    <div class="single__header">
        <h1 class="single__header-title">
            <a href="#" class="single__header-link">دیجی کالا</a>
            /
            <a href="#" class="single__header-link"><?= $product->name ?></a>
            /
            <a href="#" class="single__header-link"><?= $product->title ?></a>
        </h1>
        <i class="fa fa-heart single__header-icon"></i>
    </div>
    <div class="single__body">
        <img src="./assets/images/<?= $product->image ?>" alt="" />
        <div class="single__body-header">
            <h1 class="single__body-header-title"><?= $product->title ?></h1>
            <p class="single__text"><?= $product->description ?></p>
            <p class="single__text">هزینه : <?= number_format($product->price, 0, null, ',') ?> تومان</p>
        </div>
        <?php if (isset($_SESSION['email'])) : ?>
            <?php if ($checkIsBuyBefore) : ?>
                <a style="color:cornflowerblue;text-decoration: none;" href="#">شما قبلا این محصول رو خریداری کردید</a>
            <?php else : ?>
                <form action="./functions/add-order.php" method="POST">
                    <input type="text" hidden name="productId" value="<?= $id ?>">
                    <input type="text" hidden name="customerId" value="<?= $customerId ?>">
                    <button style="color:cornflowerblue;text-decoration: none;font-family:inherit;background:transparent;border:none" href="#">افزودن به سبد خرید</button>
                </form>
            <?php endif ?>
        <?php endif ?>
    </div>

</div>

<!-- PRODUCTS SECTION -->
<div class="products">
    <div class="products__header">
        <h1 class="products__title">مرتبط ها</h1>
    </div>
    <div class="products__body swiper-container">
        <div class="swiper-wrapper">
            <?php foreach ($relateProducts as $p) : ?>
                <a style="text-decoration: none;" href="single.php?id=<?= $p->id ?>" class="swiper-slide products__item">
                    <img class="products__image" src="./assets/images/<?= $p->image ?>" alt="" />
                    <h4 class="products__name">
                        <?= $p->title ?>
                    </h4>
                    <p class="products__price"><?= number_format($p->price, 0, null, ',') ?><span class="products__currency">تومان</span></p>
                </a>
            <?php endforeach ?>
        </div>
    </div>
</div>

<?php require_once dirname(__DIR__) . '/app/includes/end.php' ?>