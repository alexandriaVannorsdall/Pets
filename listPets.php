<?php
require __DIR__ . '/vendor/autoload.php';

use PetApp\Data\SQLLitePetRepository;
use PetApp\Services\listPetService;

$listPetService = new listPetService(new SQLLitePetRepository());
$pets = $listPetService->readPets();

foreach ($pets as $pet)
{
    echo($pet->getName()) . PHP_EOL;
    echo($pet->getType()) . PHP_EOL;
    echo($pet->getFood()) . PHP_EOL;
    echo($pet->getColor()) . PHP_EOL;
    echo($pet->getFavoriteToy()) . PHP_EOL;
    echo($pet->getSleepingPlace()) . PHP_EOL;
    echo('------') . PHP_EOL;
}



