<?php require_once 'includes/head.php'  ?>
<?php require_once 'functions/archive.blogs.php' ?>
<?php require_once 'includes/header.php' ?>
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
        <div class="archive-products__body archive-products__body--blog">
            <div class="archive-products__content">
                <?php foreach ($results as $result) : ?>
                    <a style="text-decoration: none;" href="single.blog.php?id=<?= $result->id ?>" class="archive-products__item">
                        <img class="archive-products__image" src="./assets/images/<?= $result->image ?>" alt="" />
                        <h4 class="archive-products__name">
                            <?= $result->title ?>
                        </h4>
                    </a>
                <?php endforeach ?>
            </div>
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

<?php require_once 'includes/end.php' ?>