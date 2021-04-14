<?php require_once 'includes/head.php'  ?>
<?php require_once 'functions/signup.php' ?>
<?php require_once 'includes/header.php' ?>
<div id="modal-signup" class="modal-signup modal-signup--fix">
    <?php if (!empty($errors)) : ?>
        <div class="modal-signup-error">
            <?php foreach ($errors as $error) : ?>
                <p><?= $error ?></p>
            <?php endforeach ?>
        </div>
    <?php endif ?>
    <div class="modal-signup__dialog">
        <div class="modal-signup__header">
            <h3 class="modal-signup__title">ثبت نام در سایت</h3>
        </div>
        <form action="" method="POST" class="modal-signup__form">
            <div class="modal-signup__group">
                <div>
                    <label class="modal-signup__label modal-signup__label--small">
                        شماره موبایل خود را وارد کنید
                    </label>
                    <input type="text" class="modal-signup__input" name="phone" value="<?= $phone ?>" />
                </div>
                <div>
                    <label class="modal-signup__label modal-signup__label--small">
                        نام و نام خانوادگی </label>
                    <input type="text" class="modal-signup__input" name="fullName" value="<?= $fullName ?>" />
                </div>
                <div>
                    <label class="modal-signup__label modal-signup__label--small">
                        آدرس پست الکترونیک خود را وارد کنید
                    </label>
                    <input type="text" class="modal-signup__input" name="email" value="<?= $email ?>" />
                </div>
                <div>
                    <label class="modal-signup__label modal-signup__label--small">
                        رمز عبور خود را وارد نمایید
                    </label>
                    <input type="text" class="modal-signup__input" name="password" value="<?= $password ?>" />
                </div>
                <button class="modal-signup__button" name="btnSubmit">ثبت نام در دیجی کالا</button>
            </div>
        </form>
    </div>
</div>
<?php require_once 'includes/end.php' ?>