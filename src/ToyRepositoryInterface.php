<?php

namespace PetApp;

interface ToyRepositoryInterface
{
    /**
     * @return Toy[]
     */
    public function readToys(): array;

    /**
     * @return Toy[]
     */
    function listFavoriteToy(): array;
}
