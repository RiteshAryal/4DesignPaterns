<?php
namespace components;

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
