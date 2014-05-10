<?php
namespace pizza;

class ClamPizza extends Pizzas
{
    protected $name = "Clam Pizza";

    /**
     * overridden
     */
    public function cut()
    {
        echo "\n--Cutting in Circular shape";
    }
}
