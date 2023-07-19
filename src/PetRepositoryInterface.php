<?php

namespace PetApp;

interface PetRepositoryInterface
{
    /**
     * @return Pet[]
     */
    function readPets(): array;

    /**
     * @param Pet $pet
     */
    function writePet(Pet $pet);
}
