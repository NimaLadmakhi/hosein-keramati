<?php

require_once 'functions/connect.php';
require_once 'includes/upload.php';

session_start();

$name = "";
$description = "";
$image = "";
$topicId = "";

$topicStatement = $connection->prepare("SELECT * FROM topics");
$topicStatement->execute();
$topics = $topicStatement->fetchAll(PDO::FETCH_OBJ);
$errors = [];


if ($_SESSION['email']) {
    if (isset($_POST['btnSubmit'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $topicId = $_POST["topicId"];

        if (empty($name)) {
            $errors['name'] = "نام محصول را وارد نمایید";
        }

        if (empty($description)) {
            $errors['description'] = "توضحیحات را وارد نمایید";
        }

        if (empty($topicId)) {
            $errors['topicId'] = "شاخه مربوط به این پست رو انتخاب کنید";
        }

        if (empty($_FILES['image']['tmp_name'])) {
            $errors['image'] = "برای این محصول عکس انتخاب کنید";
        }

        if (empty($errors)) {
            try {
                $image = UploadImage($_FILES['image']);
                $sql_command = "INSERT INTO products (title,description,image,topicId) VALUES ('$name','$description','$image','$topicId')";
                $createProductStatement = $connection->prepare($sql_command);
                $createProductStatement->execute();
                header("location: index.php?msg=3");
                exit;
            } catch (PDOException $e) {
                $errors = [$e->getMessage(), "محصول مورد نظر ساخته نشد"];
            }
        }
    }
} else {
    header("location: login.php");
    exit;
}
