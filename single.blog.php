<?php include_once 'includes/head.php' ?>
<?php include 'functions/single.blog.php' ?>
<?php include_once 'includes/header.php' ?>
<div class="single">
    <div class="single__body">
        <img src="./assets/images/<?= $blog->image ?>" alt="" />
        <div class="single__body-header" style="padding: 50px 50px 0 50px">
            <h1 class="single__body-header-title">
                <?= $blog->title ?>
            </h1>
            <p class="single__text">
                <?= $blog->description ?>
            </p>
        </div>
    </div>
</div>
<?php include_once 'includes/end.php' ?>