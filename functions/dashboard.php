<?php

include_once 'connect.php';

$productsSQL = "SELECT t.name as topicName, p.id as productID, p.title as productTitle, p.price as productPrice , p.create_at as productCreateAT FROM Products p JOIN Topics t ON p.topicId = t.id";
$productsStatement = $connection->prepare($productsSQL);
$productsStatement->execute();
$products = $productsStatement->fetchAll(PDO::FETCH_CLASS);

$blogsSQL = "SELECT * FROM Blogs";
$blogsStatement = $connection->prepare($blogsSQL);
$blogsStatement->execute();
$blogs = $blogsStatement->fetchAll(PDO::FETCH_CLASS);

$usersSQL = "SELECT * FROM users";
$usersStatement = $connection->prepare($usersSQL);
$usersStatement->execute();
$users = $usersStatement->fetchAll(PDO::FETCH_CLASS);
