<?php


try {
    $connection = new PDO("mysql:host=sql4.freesqldatabase.com;dbname=sql4405633;", "sql4405633", "CedfX8J5JS");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(var_dump($e->getMessage()));
}
