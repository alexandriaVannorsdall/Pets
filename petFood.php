<?php
require __DIR__ . '/vendor/autoload.php';

use PetApp\FoodRepository;

$FoodRepo = new FoodRepository();
$PetFood = $FoodRepo->listFavoritePetFood();

foreach($PetFood as $food) {
    echo $food->getFood(). $food->getPrice() . PHP_EOL;
}