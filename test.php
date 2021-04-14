<?php

var_dump(file_exists(dirname(__DIR__) . '/app/functions/connect.php'));

require_once dirname(__DIR__) . '/app/functions/connect.php';

var_dump("ONE");

$results = $connection->query("SELECT * FROM topics");
var_dump("TWO");
$results->execute();
var_dump("THREE");
$topics = $results->fetchAll(PDO::FETCH_OBJ);
var_dump("FOUR");
var_dump($topics);
