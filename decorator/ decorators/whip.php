<?php

namespace decorator\decorators;

use decorator\components\Beverage;
use decorator\decorators\condimentDecorator;

class whip extends condimentDecorator
{
    /* @var \decorator\components\Beverage */
    protected $beverage;
    
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
    
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Whip";
    }
    
    public function cost()
    {
        return .10 + $this->beverage->cost();
    }
}