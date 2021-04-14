<?php

require_once 'connect.php';
require_once 'includes/upload.php';

$errors = [];
$title = "";
$description = "";


if (isset($_POST['btnSubmit']) && isset($_SESSION['email'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];


    if (empty($title)) {
        $errors['title'] = "موضوع و سرفصل مربوط به این مقاله رو بنویسید";
    }

    if (empty($description)) {
        $errors['description'] = "توضیحات مربوط به مقاله رو کامل کنید";
    }

    if (empty($_FILES['image']['tmp_name'])) {
        $errors['image'] = "عکس مقاله رو باید انتخاب کنید";
    }

    if (empty($errors)) {
        $authorEmail = $_SESSION['email'];
        $image = UploadImage($_FILES['image']);
        $sql_command = "INSERT INTO blogs (title,description,authorEmail,image) VALUES ('$title', '$description', '$authorEmail', '$image')";
        $blogInsertStatement = $connection->prepare($sql_command);
        $blogInsertStatement->execute();
        header("location: index.php");
        exit;
    }
}
