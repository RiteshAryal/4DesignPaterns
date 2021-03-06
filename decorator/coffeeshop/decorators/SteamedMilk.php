<?php
namespace decorators;

use components\Beverage;

class SteamedMilk extends CondimentDecorator
{
    /* @var components\Beverage */
    protected $beverage;
    
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }
    
    public function getDescription()
    {
        return $this->beverage->getDescription() . ", Steamed Milk";
    }
    
    public function cost()
    {
        return .10 + $this->beverage->cost();
    }
}
