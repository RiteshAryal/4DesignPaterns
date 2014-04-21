<?php
namespace product\NYPizzaStore;

use product\Pizza;

class NYStyleClamPizza extends Pizza
{
    protected $name = "NY Style Clam Pizza";

    /**
     * overridden
     */
    public function cut()
    {
        echo "\n--Cutting in Circular shape";
    }
}
