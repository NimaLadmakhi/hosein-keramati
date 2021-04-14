<?php

require_once dirname(__DIR__) . '/functions/connect.php';

$sql_command = "SELECT * FROM topics";
$topicStatement = $connection->prepare($sql_command);
$topicStatement->execute();
$topics = $topicStatement->fetchAll(PDO::FETCH_OBJ);

$products = [];

foreach ($topics as $topicKey => $topic) {
    $sql_command = "SELECT * FROM Products WHERE topicId = " . $topic->id;
    $statement = $connection->prepare($sql_command);
    $statement->execute();
    $obj = $statement->fetchAll(PDO::FETCH_OBJ);
    $products[$topic->name] = $obj;
}

$sql_command = "SELECT * FROM products ORDER BY create_at DESC limit 8";
$recentlyStatement = $connection->prepare($sql_command);
$recentlyStatement->execute();
$recentlyProduct = $recentlyStatement->fetchAll(PDO::FETCH_OBJ);

$sql_command = "SELECT * FROM blogs ORDER BY create_at DESC limit 8";
$blogStatement = $connection->prepare($sql_command);
$blogStatement->execute();
$blogs = $blogStatement->fetchAll(PDO::FETCH_OBJ);

var_dump($blogs);
