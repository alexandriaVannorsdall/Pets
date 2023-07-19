<?php

namespace PetApp\Services;

use PetApp\Pet;
use PetApp\PetRepositoryInterface;

class CreatePetService
{
    private PetRepositoryInterface  $petRepository;

    function __construct(PetRepositoryInterface $petRepository)
    {
        $this->petRepository = $petRepository;
    }

    function createPet($name_of_pet, $type_of_pet, $food, $color)
    {
        $pet = new Pet($name_of_pet, $type_of_pet, $food, $color, '', '');

        $this->petRepository->writePet($pet);
    }
}