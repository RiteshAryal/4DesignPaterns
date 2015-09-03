<?php
/**
 * Each component can be used on its own or wrapped by a decorator
 */
namespace components;

abstract class Beverage
{
    protected $description = "Unknown Beverage";

    public function getDescription()
    {
        return $this->description;
    }
    
    abstract public function cost();
}
