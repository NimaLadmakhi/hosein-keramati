<?php include_once 'includes/head.php' ?>
<?php include_once 'functions/bucket.php' ?>
<?php include_once 'includes/header.php' ?>
<!-- EMPTY BUCKET -->
<?php if (empty($buckets)) : ?>
    <div class="empty-bucket">
        <img src="./assets/images/empty-bucket.png" class="empty-bucket__image" alt="" />
        <h3 class="empty-bucket__title">سبد خرید شما خالی است!</h3>
        <p class="empty-bucket__description">می‌توانید برای مشاهده محصولات بیشتر به صفحات زیر بروید</p>
        <div class="empty-bucket__links">
            <a href="#" class="empty-bucket__link empty-bucket__link--border">محصولات پرفروش روز</a>
            <a href="#" class="empty-bucket__link">تخفیف‌ها و پیشنهادها</a>
        </div>
    </div>
<?php else : ?>
    <div class="buckets">
        <div class="buckets__products">
            <?php foreach ($buckets as $item) : ?>
                <div class="buckets__products-item">
                    <img src="./assets/images/<?= $item->image ?>" class="buckets__products-item-image" alt="" />
                    <div class="buckets__products-detail">
                        <h3 class="buckets__products-title">
                            <?= $item->title ?>
                        </h3>
                        <p style="height: 200px;overflow:hidden" class="buckets__products-fact"><?= $item->description ?></p>
                        <div class="buckets__products-group">
                            <a href="#" class="buckets__products-delete">
                                <i class="fa fa-trash buckets__products-delete-icon"></i>
                                حذف
                            </a>
                            <span class="buckets__products-price"> <?= number_format($item->price, 0, null, ',') ?> تومان </span>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="buckets__status">
            <div class="buckets__status-header">
                <h4 class="buckets__status-count">ویرایش حساب کاربری</h4>
            </div>
            <form action="" method="POST" class="bucket-inf">
                <div>
                    <label>نام کاربری</label>
                    <input type="text" name="username" value="<?= $username ?>">
                </div>
                <div>
                    <label>آدرس ایمیل</label>
                    <input type="text" name="email" value="<?= $email ?>">
                </div>
                <div>
                    <label>پسورد</label>
                    <input type="text" name="password" value="<?= $password ?>">
                </div>
                <div>
                    <label>نام و نام خانوادگی</label>
                    <input type="text" name="fullName" value="<?= $fullName ?>">
                </div>
                <div>
                    <label>شماره موبایل</label>
                    <input type="text" name="phone" value="<?= $phone ?>">
                </div>
                <button type="submit" name="btnSubmit">ذخیره اطلاعات</button>
            </form>
            <?php foreach ($errors as $err) : ?>
                <p style="color: red;font-size: 13px;"><?= $err ?></p>
            <?php endforeach ?>
        </div>
    </div>

<?php endif ?>

<!-- BUCKET SLIDESHOW -->

<?php include_once 'includes/end.php' ?>