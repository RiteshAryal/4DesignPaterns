<?php

namespace decorator\decorators;

use decorator\components\Beverage;
use decorator\decorators\condimentDecorator;

class soy extends condimentDecorator
{
    /* @var \decorator\components\Beverage */
    protected $beverage;
    
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
    
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Soy";
    }
    
    public function cost()
    {
        return .15 + $this->beverage->cost();
    }
}