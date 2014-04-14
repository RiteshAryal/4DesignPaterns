<?php

namespace decorator\components;

abstract class Beverage
{
    protected $description = "Unknown Beverage";
    
    public function getDescription()
    {
        return $this->description;
    }
    
    abstract public function cost();
}