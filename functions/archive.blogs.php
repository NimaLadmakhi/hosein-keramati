<?php

require_once 'connect.php';

$dataSQL = "SELECT * FROM Blogs ORDER BY create_at DESC";
$dataStatement = $connection->prepare($dataSQL);
$dataStatement->execute();
$results = $dataStatement->fetchAll(PDO::FETCH_OBJ);


$topicsSQL = "SELECT * FROM Topics";
$topicsStatement = $connection->prepare($topicsSQL);
$topicsStatement->execute();
$topics = $topicsStatement->fetchAll(PDO::FETCH_OBJ);
