<?php

include_once 'connect.php';

if (!isset($_GET['id'])) {
    header("location: index.php");
}

$blogId = $_GET['id'];
$blogSQL = "SELECT * FROM Blogs WHERE id = $blogId";
$blogStatement = $connection->prepare($blogSQL);
$blogStatement->execute();
$blog = $blogStatement->fetchObject();
