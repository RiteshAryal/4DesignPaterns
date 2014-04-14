<?php

namespace decorator\components;
use decorator\components\Beverage;

class DarkRoast extends Beverage
{
    public function __construct()
    {
        $this->description = "DarkRoast";
    }
    
    public function cost()
    {
        return .99;
    }
}