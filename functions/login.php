<?php

$errors = [];
$phoneOrEmail = "";
$password = "";

if (isset($_POST['btnSubmit'])) {
    $phoneOrEmail = $_POST['phoneOrEmail'];
    $password = $_POST['password'];

    if (empty($phoneOrEmail)) {
        array_push($errors, "آدرس ایمیل یا شماره موبایل اجباری میباشد");
    }

    if (empty($password)) {
        array_push($errors, "گذرواژه رو پر کنید");
    }

    if (empty($errors)) {
        require_once 'functions/connect.php';
        try {
            $sql_command = "SELECT * FROM Users WHERE email='$phoneOrEmail' AND password='$password' OR phone='$phoneOrEmail' AND password='$password'";
            $loginStatement = $connection->prepare($sql_command);
            $loginStatement->execute();
            $user = $loginStatement->fetchObject();
            if (isset($user->email)) {
                $_SESSION['email'] = $user->email;
                header("location: index.php");
                exit;
            } else {
                $errors = ['کاربری با این آدرس ایمیل یا شماره تلفن یافت نشد'];
            }
        } catch (PDOException $e) {
            $errors = ['کاربری با این آدرس ایمیل یا شماره تلفن یافت نشد'];
        }
    }
}
