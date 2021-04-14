<?php require_once 'includes/head.php'  ?>
<?php require_once 'functions/archive.products.php' ?>
<?php require_once 'includes/header.php' ?>
<!-- ARCHIVE PRODUCTS -->
<div class="archive-products">
    <div class="archive-products__filter">
        <div class="archive-products__filter-container">
            <div class="archive-products__filter-header">
                <h1 class="archive-products__filter-title">دسته‌بندی نتایج</h1>
            </div>
            <ul class="archive-products__filter-list">
                <?php foreach ($topics as $topic) : ?>
                    <li class="archive-products__filter-item">
                        <a href="archive.products.php?filterBy=<?= $topic->id ?>" class="archive-products__filter-link"><?= $topic->name ?></a>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div class="archive-products__section">
        <div class="archive-products__body">
            <div class="archive-products__content">
                <?php foreach ($products as $product) : ?>
                    <a style="text-decoration: none;" href="single.php?id=<?= $product->id ?>" class="archive-products__item">
                        <img class="archive-products__image" src="./assets/images/<?= $product->image ?>" alt="" />
                        <h4 class="archive-products__name"><?= $product->title ?></h4>
                        <p class="archive-products__price">
                            <?= number_format($product->price, 0, null, ',') ?> <span class="archive-products__currency">تومان</span>
                        </p>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<?php require_once 'includes/end.php' ?>