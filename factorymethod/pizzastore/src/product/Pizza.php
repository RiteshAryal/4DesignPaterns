<?php
namespace product;

abstract class Pizza
{
    protected $name;

    public function getName()
    {
        return $this->name;
    }

    public function prepare()
    {
        echo "\nPreparing " . $this->getName();
        echo "\nTossing dough...";
        echo "\nAdditing sauce...";
        echo "\nAdding Toppings:";
    }

    public function bake()
    {
        echo "\n-Bake for 15 minutes at 450";
    }

    public function cut()
    {
        echo "\n--Cutting the Pizza into diagonal slices";
    }

    public function box()
    {
        echo "\n---Place pizza in official Box\n";
    }
}
