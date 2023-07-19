<?php

namespace PetApp;

class FoodRepository implements FoodRepositoryInterface
{
    private FileManagement $petFileManager;
    private FileManagement $foodFileManager;

    function __construct()
    {
        $this->petFileManager = new FileManagement('Text.txt');
        $this->foodFileManager = new FileManagement('Food.txt');
    }

    /**
     * @return Food[]
     */
    function listFavoritePetFood(): array
    {
        $this->petFileManager->openFile('r');
        $list_of_food = [];


        while($CurrentPets = $this->petFileManager->readCSV()) {
            $price = $this->getFoodPriceByName($CurrentPets[2]);
            $food = new Food($CurrentPets[2], $price);
            if (in_array($food,$list_of_food)) {
                continue;
            }

            $list_of_food[] = $food;
        }
        $this->petFileManager->closeFile();
        return $list_of_food;
    }

    /**
     * @return Food[]
     */
    function listAllFood(): array
    {
        $this->foodFileManager->openFile('r');
        $list_of_food = [];


        while($CurrentFood = $this->foodFileManager->readCSV()) {
            $food = new Food($CurrentFood[0], $CurrentFood[1]);

            $list_of_food[] = $food;
        }
        $this->foodFileManager->closeFile();
        return $list_of_food;

    }

    /**
     * @param string $name
     * @return string
     */
    function getFoodPriceByName(string $name): string
    {
        $foods = $this->listAllFood();

        foreach ($foods as $food) {
            if ($food->getFood() == $name) {
                return $food->getPrice();
            }
        }
            return '';
    }
}