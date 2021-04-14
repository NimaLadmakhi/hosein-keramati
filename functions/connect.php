<?php

// Host: sql4.freesqldatabase.com
// Database name: sql4405633
// Database user: sql4405633
// Database password: CedfX8J5JS
// Port number: 3306

try {
    $connection = new PDO("mysql:host=sql4.freesqldatabase.com;dbname=sql4405633;charset=utf8", "sql4405633", "CedfX8J5JS");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die(var_dump($e->getMessage()));
}
