<?php

$errors = [];

$phone = "";
$email = "";
$password = "";
$fullName = "";

if (isset($_POST['btnSubmit'])) {
    $phone = $_POST['phone'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($phone) || strlen($phone) !== 11) {
        array_push($errors, "شماره موبایل باید 11 رقم باشد");
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors, "ایمیل وارد شده نادرست میباشد");
    }

    if (empty($password) || strlen($password) < 8) {
        array_push($errors, "گذرواژه وارد شده صحیح نمیباشد");
    }

    if (empty($fullName)) {
        array_push($errors, "نام و نام خانوادگی خود را درست وارد نمایید");
    }

    if (empty($errors)) {
        require_once 'connect.php';
        try {
            $roleId = $email === 'hosein.keramati@gmail.com' ? 'admin' : 'user';
            $sql_command = "INSERT INTO Users (email,password,fullName,phone,roleId) VALUES ('$email','$password','$fullName','$phone','$roleId')";
            $userSignupStatement = $connection->prepare($sql_command);
            $userSignupStatement->execute();
            $_SESSION['email'] = $email;
            header("location: index.php?code=1");
            exit;
        } catch (PDOException $e) {
            if ($e->getMessage() === "SQLSTATE[23000]: Integrity constraint violation: 1062 Duplicate entry 'amin@gmail.com' for key 'email'") {
                $errors = ["ادرس ایمیل قبلا استفاده شده است"];
            } else {
                $errors = [$e->getMessage()];
            }
        }
    }
}
