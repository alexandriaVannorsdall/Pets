<?php
require __DIR__ . '/vendor/autoload.php';

use PetApp\PetRepository;

$PetRepo = new PetRepository();
$pets = $PetRepo->readPets();

foreach($pets as $pet)
{
    echo $pet->getColor() . PHP_EOL;

}