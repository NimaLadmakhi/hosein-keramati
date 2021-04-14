<?php require_once 'functions/create-product.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PRODUCT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <div class="container my-5 py-5">
        <form method="POST" action="" enctype="multipart/form-data" class="create-form-boot text-right">
            <div class="form-group my-4">
                <label for="productName">نام محصول</label>
                <input type="text" class="form-control" name="name" id="productName" placeholder="نام محصول را بنویسید">
                <small class="text-danger"><?= isset($errors['name']) ? $errors['name'] : "" ?></small>
            </div>
            <div class="form-group my-4">
                <label for="productTopic">عنوان محصول</label>
                <select type="text" class="form-control" name="topicId" id="productTopic">
                    <option value="">شاخه محصول رو انتخاب کنید</option>
                    <?php foreach ($topics as $topic) : ?>
                        <option value="<?= $topic->id ?>"><?= $topic->name ?></option>
                    <?php endforeach; ?>
                </select>
                <small class="text-danger"><?= isset($errors['topicId']) ? $errors['topicId'] : "" ?></small>
            </div>
            <div class="form-group my-4">
                <label for="productDescription">توضیحات</label>
                <textarea class="form-control" id="productDescription" name="description" placeholder="درمورد محصول توضیح دهید" rows="10"></textarea>
                <small class="text-danger"><?= isset($errors['description']) ? $errors['description'] : "" ?></small>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <label class="btn btn-info px-4" for="selectProductImage">انتخاب عکس</label>
                <input type="file" id="selectProductImage" name="image" hidden>
                <button type="submit" name="btnSubmit" class="btn btn-primary px-5">ذخیره</button>
            </div>
        </form>
    </div>
</body>

</html>