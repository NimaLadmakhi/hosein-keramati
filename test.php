<?php

var_dump(__DIR__);
echo "<br/>";
var_dump(dirname(__DIR__));
require_once realpath(__DIR__) . '/app/functions/connect.php';

var_dump("ONE");

$results = $connection->query("SELECT * FROM topics");
var_dump("TWO");
$results->execute();
var_dump("THREE");
$topics = $results->fetchAll(PDO::FETCH_OBJ);
var_dump("FOUR");
var_dump($topics);
