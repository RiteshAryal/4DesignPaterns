<?php

class MenuItem extends MenuComponent
{
    private $name;
    private $description;
    private $vegetarian;
    private $price;

    public function __construct($name, $description, $vegetarian, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->vegetarian = $vegetarian;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function isVegetarian()
    {
        return $this->vegetarian;
    }

    public function printMenu()
    {
        echo " " .
            $this->getName() .
            $this->isVegetarian()?"(v)":"" .
            $this->getPrice() .
            "   ---  " .
            $this->getDescription();
    }
}
