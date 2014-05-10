<?php
namespace components;

class Decaf extends Beverage
{
    public function __construct()
    {
        $this->description = "Decaf";
    }
    
    public function cost()
    {
        return 1.05;
    }
}
