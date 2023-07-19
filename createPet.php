<?php
require __DIR__ . '/vendor/autoload.php';

use PetApp\Data\SQLLitePetRepository;
use PetApp\Services\CreatePetService;

$name_of_pet = $argv[1];

$type_of_pet = $argv[2];

$food = $argv[3];

$color = $argv[4];

$createPetService = new CreatePetService(new SQLLitePetRepository());
$createPetService->createPet($name_of_pet, $type_of_pet, $food, $color);

echo $name_of_pet . ' ' . $type_of_pet. ' '. $food . $color . PHP_EOL;