<?php

require_once 'connect.php';

if (isset($_POST['customerId']) and isset($_POST['productId'])) {
    var_dump($_POST);
    try {
        $customerId = (int)$_POST['customerId'];
        $productId = (int)$_POST['productId'];
        $command_sql = "INSERT INTO Orders (productId, customerId) VALUES ($productId,$customerId)";
        $statement = $connection->prepare($command_sql);
        $statement->execute();
        header("location: ../index.php?msg=4");
        exit;
    } catch (PDOException $m) {
        echo $m->getMessage();
    }
}
