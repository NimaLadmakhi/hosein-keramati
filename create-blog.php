<?php session_start() ?>
<?php require_once 'functions/create-blog.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE BLOG</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
</head>

<body>
    <div class="container my-5 py-5">
        <form method="POST" action="" enctype="multipart/form-data" class="create-form-boot text-right">
            <div class="form-group my-4">
                <label for="titleBlog">موضوع مقاله</label>
                <input type="text" class="form-control" name="title" id="titleBlog" placeholder="تایتل مربوط به مقاله">
                <small class="text-danger"><?= isset($errors['title']) ? $errors['title'] : "" ?></small>
            </div>
            <div class="form-group my-4">
                <label for="descriptionBlog">توضیحات</label>
                <textarea class="form-control" id="descriptionBlog" name="description" placeholder="درمورد این مقاله باید بنویسید" rows="10"></textarea>
                <small class="text-danger"><?= isset($errors['description']) ? $errors['description'] : "" ?></small>
            </div>
            <div class="d-flex align-items-center justify-content-between">
                <div>
                    <label class="btn btn-info px-4" for="selectProductImage">انتخاب عکس</label>
                    <input type="file" id="selectProductImage" name="image" hidden>
                    <small class="text-danger"><?= isset($errors['image']) ? $errors['image'] : "" ?></small>
                </div>
                <button type="submit" name="btnSubmit" class="btn btn-primary px-5">ذخیره</button>
            </div>
        </form>
    </div>
</body>

</html>