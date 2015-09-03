<?php
namespace components;

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
