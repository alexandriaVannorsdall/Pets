<?php

namespace PetApp\Services;

use PetApp\ToyRepositoryInterface;

class listToyService
{
    private ToyRepositoryInterface $toyRepository;

    function __construct(ToyRepositoryInterface $toyRepository)
    {
        $this->toyRepository = $toyRepository;
    }

    function readToys()
    {
        return $this->toyRepository->readToys();
    }

}