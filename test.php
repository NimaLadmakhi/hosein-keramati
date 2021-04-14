<?php

require_once __DIR__ . '/functions/connect.php';

var_dump(dirname(__DIR__));

echo "<br/>";

var_dump(scandir(__DIR__));

echo "<br/>";

var_dump(file_exists(__DIR__ . '/functions/connect.php'));
