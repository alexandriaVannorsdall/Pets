<?php

namespace PetApp;

class Toy
{
    private string $name;
    private string $color;
    private string $price;
    private string $noisy;

    function __construct(string $name,string $color, string $price, string $noisy)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->noisy = $noisy;
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
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getNoisy(): string
    {
        return $this->noisy;
    }
}

