<?php

function UploadImage($imageArr)
{
    $pathname = dirname(__DIR__) . '/assets/images/';
    $filename = time() . sha1(rand()) . rand() . $imageArr['name'];
    $tmpname = $imageArr['tmp_name'];

    if (!is_dir($pathname)) {
        mkdir($pathname);
    }
    move_uploaded_file($tmpname, $pathname . $filename);
    return $filename;
}