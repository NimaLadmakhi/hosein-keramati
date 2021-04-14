<?php

require_once realpath(__DIR__) . '/app/functions/connect.php';

$results = $connection->query("SELECT * FROM topics");
$results->execute();
$topics = $results->fetchAll(PDO::FETCH_OBJ);
var_dump($topics);
