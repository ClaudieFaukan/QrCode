<?php

use Endroid\QrCode\QrCode;

require "./vendor/autoload.php";


$url = $_POST["url"];
$name = $_POST["name"];


$pathFile = "./upload/" . $name . ".png";
$qrcode = new QrCode($url);

$qrcode->saveToFile($pathFile);
