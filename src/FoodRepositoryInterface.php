<?php

namespace PetApp;

interface FoodRepositoryInterface
{
    /**
     * @return Food[]
     */
    function listFavoritePetFood(): array;

    /**
     * @return Food[]
     */
    function listAllFood(): array;

    /**
     * @param string $name
     * @return string
     */
    function getFoodPriceByName(string $name): string;
}