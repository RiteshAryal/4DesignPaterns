<?php
namespace product\ChicagoPizzaStore;

use product\Pizza;

class ChicagoStyleClamPizza extends Pizza
{
    protected $name = "Chicago Style Clam Pizza";

    /**
     * overridden
     */
    public function cut()
    {
        echo "\n--Cutting in Circular shape";
    }
}
