<?php

namespace PetApp\Services;

use PetApp\Pet;
use PetApp\PetRepositoryInterface;

class listPetService
{
    private PetRepositoryInterface  $petRepository;

    function __construct(PetRepositoryInterface $petRepository)
    {
        $this->petRepository = $petRepository;
    }

    function readPets()
    {
        return $this->petRepository->readPets();

    }
}