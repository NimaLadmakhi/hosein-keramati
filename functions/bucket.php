<?php

include_once 'connect.php';

if (!isset($_SESSION['email'])) {
    header("location: login.php");
}



// user
$email = $_SESSION['email'];
$userSQL = "SELECT * FROM Users WHERE email = '$email'";
$userStatement = $connection->prepare($userSQL);
$userStatement->execute();
$userResults = $userStatement->fetchObject();
$email = $userResults->email;
$password = $userResults->password;
$username = $userResults->username;
$fullName = $userResults->fullName;
$phone = $userResults->phone;
$userId = $userResults->id;
$errors = [];

if (isset($_POST['btnSubmit'])) {
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "آدرس ایمیل وارد شده نادرست میباشد");
    }
    if (empty($_POST['password']) || strlen($_POST['password']) < 8) {
        array_push($errors, "رمز وارد شده درست نمیباشد");
    }
    if (empty($_POST['phone']) || strlen($_POST['phone']) != 11) {
        array_push($errors, "شماره موبایل مورد نظر صحیح نمیباشد");
    }
    if (empty($_POST['fullName'])) {
        array_push($errors, "نام و نام خانوادگی خود را کامل وارد نمایید");
    }
    if (empty($errors)) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fullName = $_POST['fullName'];
        $phone = $_POST['phone'];

        $userUpdateSQL = "UPDATE Users SET username = '$username',email = '$email',password='$password',fullName='$fullName',phone='$phone' WHERE id=$userId";
        $userUpdateStatement = $connection->prepare($userUpdateSQL);
        $userUpdateStatement->execute();

        $_SESSION['email'] = $email;
    }
}

$bucketSQL = "SELECT * FROM Orders o JOIN Users u ON o.customerId=u.id JOIN Products p ON o.productId=p.id WHERE customerId=$userId ORDER BY o.create_at DESC";
$bucketStatement = $connection->prepare($bucketSQL);
$bucketStatement->execute();
$buckets = $bucketStatement->fetchAll(PDO::FETCH_OBJ);
