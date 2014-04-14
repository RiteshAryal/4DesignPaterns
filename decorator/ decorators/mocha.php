<?php

namespace decorator\decorators;

use decorator\components\Beverage;
use decorator\decorators\condimentDecorator;

class mocha extends condimentDecorator
{
    /* @var \decorator\components\Beverage */
    protected $beverage;
    
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
    
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Mocha";
    }
    
    public function cost()
    {
        return .20 + $this->beverage->cost();
    }
}