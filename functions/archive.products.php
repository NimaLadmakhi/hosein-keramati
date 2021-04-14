<?php

include 'connect.php';

$productsSQL = "SELECT * FROM Products ORDER BY create_at DESC";

if (isset($_GET['filterBy'])) {
    $topicId = $_GET['filterBy'];
    $productsSQL = "SELECT * FROM Products WHERE topicId = $topicId ORDER BY create_at DESC";
}

$productsStatement = $connection->prepare($productsSQL);
$productsStatement->execute();
$products = $productsStatement->fetchAll(PDO::FETCH_OBJ);

$topicsSQL = "SELECT * FROM Topics";
$topicsStatement = $connection->prepare($topicsSQL);
$topicsStatement->execute();
$topics = $topicsStatement->fetchAll(PDO::FETCH_OBJ);
