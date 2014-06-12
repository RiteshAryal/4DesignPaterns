<?php

class Coffee extends CaffeineBeverage
{
    public function brew()
    {
        echo "\n---Brew Coffee---";
    }

    public function addCondiments()
    {
        echo "\n---Add Condiments to Coffee---";
    }

    /**
     * Overriden the HOOK
     * @return bool
     */
    public function customerWantsCondiments()
    {
        return false;
    }
}
