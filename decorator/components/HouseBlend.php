<?php

namespace decorator\components;
use decorator\components\Beverage;

class HouseBlend extends Beverage
{
    public function __construct()
    {
        $this->description = "HouseBlend";
    }
    
    public function cost()
    {
        return .89;
    }
}