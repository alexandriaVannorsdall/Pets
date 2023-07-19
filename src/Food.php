<?php

namespace PetApp;

class Food
{
    private $food;
    private $price;

    function __construct(string $food, $price=null)
    {
        $this->food = $food;
        $this->price = $price;
    }

    function priceWithNoSymbol()
    {
       return str_replace('£',"", $this->price);
    }

    /**
     * @return string
     */
    public function getFood(): string
    {
        return $this->food;
    }

    /**
     * @return string|null
     */
    public function getPrice()
    {
        return $this->price;
    }
}
