<?php
require __DIR__ . '/vendor/autoload.php';

use PetApp\Data\SQLLiteToyRepository;
use PetApp\Services\listToyService;
use PetApp\ToyRepository;

$listToyService= new listToyService(new SQLLiteToyRepository());
$toys = $listToyService->readToys();

foreach($toys as $toy)
{
    echo $toy->getName() . PHP_EOL;
    echo $toy->getColor() . PHP_EOL;
    echo $toy->getprice() . PHP_EOL;
    echo $toy->getNoisy() . PHP_EOL;
    echo '------------------' .PHP_EOL;
}