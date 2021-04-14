<?php

require_once dirname(__DIR__) . '/functions/connect.php';

if (!isset($_GET['id'])) {
    header("location: index.php");
    exit;
}

var_dump("salam");

$id = $_GET['id'];
$sql_command = "SELECT * FROM Products p JOIN Topics t ON p.topicId=t.id WHERE p.id = '$id'";
$productStatement = $connection->query($sql_command);
$productStatement->execute();
$product = $productStatement->fetchObject();

var_dump("salam 2");


$relateProductsSQL = "SELECT * FROM Products WHERE topicId=" . $product->topicId . " limit 5";
$relateProductsCommand = $connection->query($relateProductsSQL);
$relateProductsCommand->execute();
$relateProducts = $relateProductsCommand->fetchAll(PDO::FETCH_OBJ);

$checkIsBuyBefore = false;
try {
    if (isset($_SESSION['email'])) {
        $customerIdSQL = "SELECT * FROM Users WHERE email = '" . $_SESSION['email'] . "'";
        $customerIdStatement = $connection->query($customerIdSQL);
        $customerIdStatement->execute();
        $userStatement = $customerIdStatement->fetchObject();
    }

    if (isset($userStatement->id)) {
        $customerId = $userStatement->id;
        $checkIsBuyBeforeSQL = "SELECT * FROM Orders WHERE productId = $id AND customerId = $customerId";
        $checkIsBuyBeforeStatement = $connection->query($checkIsBuyBeforeSQL);
        $checkIsBuyBeforeStatement->execute();
        $checkIsBuyBefore = $checkIsBuyBeforeStatement->fetchObject();
    }
} catch (PDOException $e) {
}
