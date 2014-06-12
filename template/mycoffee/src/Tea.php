<?php

/**
 * The ConcreteClass implements the abstract operations,
 * which are called when the templateMethod() needs them
 *
 * Class Tea
 */

class Tea extends CaffeineBeverage
{
    public function brew()
    {
        echo "\n---Brew Tea---";
    }

    public function addCondiments()
    {
        echo "\n---Add Condiments to Tea---";
    }
}
