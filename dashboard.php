<?php include_once 'includes/head.php' ?>
<?php include_once 'functions/dashboard.php' ?>
<?php include_once 'includes/header.php' ?>
<table class="table__dashboard">
    <tr>
        <th>آیدی محصول</th>
        <th>نام محصول</th>
        <th>تاریخ ساخت</th>
        <th>هزینه محصول</th>
        <th>شاخه محصول</th>
    </tr>
    <?php foreach ($products as $product) : ?>
        <tr>
            <td><?= $product->productID ?></td>
            <td><?= $product->productTitle ?></td>
            <td><?= $product->productCreateAT ?></td>
            <td> تومان <?= number_format($product->productPrice, 0, null, ',') ?></td>
            <td><?= $product->topicName ?></td>
        </tr>
    <?php endforeach ?>
</table>

<table class="table__dashboard">
    <tr>
        <th>آیدی محصول</th>
        <th>موضوع مقاله</th>
        <th>نویسنده</th>
        <th>تاریخ ساخت</th>
    </tr>
    <?php foreach ($blogs as $blog) : ?>
        <tr>
            <td><?= $blog->id ?></td>
            <td><?= $blog->title ?></td>
            <td><?= $blog->authorEmail ?></td>
            <td><?= $blog->create_at ?></td>
        </tr>
    <?php endforeach ?>
</table>

<table class="table__dashboard">
    <tr>
        <th>آیدی کاربر</th>
        <th>ایمیل کاربر</th>
        <th>نام خانوادگی</th>
        <th>سطح دسترسی</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->fullName ?></td>
            <td><?= $user->roleId ?></td>
        </tr>
    <?php endforeach ?>
</table>
<?php include_once 'includes/end.php' ?>