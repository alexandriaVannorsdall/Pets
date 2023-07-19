<?php

use PetApp\PetRepository;

require __DIR__ . '/vendor/autoload.php';

$name_of_pet = $argv[1];

$PetRepo = new PetRepository();
$pets = $PetRepo->readPets();

foreach($pets as $pet)
{
    if ($pet->getName() == $name_of_pet) {
        echo $pet->getType() . PHP_EOL;
    }
}

