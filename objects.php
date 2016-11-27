<?php
include 'classes/Mug.php';
include 'classes/KitchenKnife.php';
include 'classes/IDE.php';
include 'classes/Movie.php';
include 'classes/Candle.php';

// Перед покупкой
$myFavouriteMug = new Mug('red', '400 ml', 600, 'ceramic', 'store');

// После покупки
$myFavouriteMug->setOwner('me');
$myFavouriteMug->setPrice('priceless');

// В момент покупки
$myKitchenKnife = new KitchenKnife('standard', 'WMF', 'wood', 1500);

// Через год использования
$myKitchenKnife->setSharpness('dull');

$PHPStorm = new IDE('PHPStorm', 'JetBrains', '2016.2.2', 200, 50);
$PHPStorm->getPrice();
$PHPStorm->getVersion();

$matrix = new Movie('Matrix');
$matrix->setCountry('USA');

$christmasCandle = new Candle();
$christmasCandle->setBrand('JoMelone');
$christmasCandle->setColor('red');
$christmasCandle->getColor();




