<?php require_once 'includes/head.php'  ?>
<?php require_once 'functions/login.php' ?>
<?php require_once 'includes/header.php' ?>
<div id="modal-signup" class="modal-signup">
    <?php if (!empty($errors)) : ?>
        <div class="modal-signup-error">
            <?php foreach ($errors as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <div class="modal-signup__dialog">
        <div class="modal-signup__header">
            <h3 class="modal-signup__title">ثبت نام یا ورود به سایت</h3>
        </div>
        <form class="modal-signup__form" method="POST" action="">
            <div class="modal-signup__group">
                <div>
                    <label class="modal-signup__label modal-signup__label--small">
                        آدرس پست الکترونیک خود را وارد کنید
                    </label>
                    <input type="text" class="modal-signup__input" name="phoneOrEmail" value="<?= $phoneOrEmail ?>" />
                </div>
                <div>
                    <label class="modal-signup__label modal-signup__label--small">
                        رمز عبور خود را وارد نمایید
                    </label>
                    <input type="text" class="modal-signup__input" name="password" value="<?= $password ?>" />
                </div>
                <button class="modal-signup__button" name="btnSubmit">ورود به دیجی کالا</button>
            </div>
        </form>
    </div>
</div>
<?php require_once 'includes/end.php' ?>