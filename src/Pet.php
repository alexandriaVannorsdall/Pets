<?php

namespace PetApp;

class Pet
{
    private $name;
    private $type;
    private $food;
    private $color;
    private $favoriteToy;
    private $sleepingPlace;

    function __construct(string $name,  string $type, string $food, string $color,
                         string $favoriteToy, string $sleepingPlace)
    {
        $this->name = $name;
        $this->type = $type;
        $this->food = $food;
        $this->color = $color;
        $this->favoriteToy = $favoriteToy;
        $this->sleepingPlace = $sleepingPlace;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getFood(): string
    {
        return $this->food;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getFavoriteToy(): string
    {
        return $this->favoriteToy;
    }

    /**
     * @return string
     */
    public function getSleepingPlace(): string
    {
        return $this->sleepingPlace;
    }
}

