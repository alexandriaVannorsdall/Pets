<?php

use PetApp\FoodRepository;

require __DIR__ . '/vendor/autoload.php';

$FoodRepo = new FoodRepository();

$foods = $FoodRepo->listAllFood();

$totalPrice = 0;



foreach($foods as $food) {
    $totalPrice += $food->priceWithNoSymbol();
    echo $food->getFood() . $food->getPrice() . PHP_EOL;
}
echo $totalPrice;