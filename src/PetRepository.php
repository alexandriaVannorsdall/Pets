<?php

namespace PetApp;

class PetRepository implements PetRepositoryInterface
{
    private FileManagement $fileManager;

    function __construct()
    {
        $this->fileManager = new FileManagement('Text.txt');
    }

    /**
     * @return Pet[]
     */
    function readPets(): array
    {
        $this->fileManager->openFile('r');
        $pets = [];

        while($CurrentPets = $this->fileManager->readCSV()) {
            $pet = new Pet($CurrentPets[0], $CurrentPets[1], $CurrentPets[2],
                $CurrentPets[3],$CurrentPets[4], $CurrentPets[5] );

            $pets[] = $pet;
        }
        $this->fileManager->closeFile();
        return $pets;
    }

    /**
     * @param Pet $pet
     */
    function writePet(Pet $pet)
    {
        $this->fileManager->openFile('a');

        $list_of_pets = [
            $pet->getName(), $pet->getType(), $pet->getFood(), $pet->getColor(),
            $pet->getFavoriteToy(), $pet->getSleepingPlace()
        ];

        $this->fileManager->writeCSV($list_of_pets);

        $this->fileManager->closeFile();
    }
}