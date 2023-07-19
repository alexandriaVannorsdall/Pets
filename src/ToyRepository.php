<?php

namespace PetApp;

class ToyRepository implements ToyRepositoryInterface
{
    private FileManagement $toyFileManager;
    private FileManagement $petFileManager;

    function __construct()
    {
        $this->toyFileManager = new FileManagement('Toy.csv');
        $this->petFileManager = new FileManagement('Text.txt');
    }

    /**
     * @return Toy[]
     */
    function readToys(): array
    {
        $this->toyFileManager->openFile('r');
        $toys = [];

        while($CurrentToys = $this->toyFileManager->readCSV()) {
            $toy = new Toy($CurrentToys[0], $CurrentToys[1], $CurrentToys[2], $CurrentToys[3]);

            $toys[] = $toy;
        }
        $this->toyFileManager->closeFile();
        return $toys;
    }

    /**
     * @param string $name
     * @return Toy|null
     */
    public function getToyByName(string $name): ?Toy
    {
        $toys = $this->readToys();

        foreach($toys as $toy) {
            if($toy->getName()== $name) {
                return $toy;
            }
        }
        return null;
    }

    /**
     * @return Toy[]
     */
    function listFavoriteToy(): array
    {
       $this->petFileManager->openFile('r');
       $list_of_toys = [];

        while($CurrentToys = $this->petFileManager->readCSV()) {
            $toy = $this->getToyByName($CurrentToys[4]);
            if (in_array($toy,$list_of_toys)) {
                continue;
            }
            $list_of_toys[] = $toy;
        }
        $this->petFileManager->closeFile();
        return $list_of_toys;
    }
}