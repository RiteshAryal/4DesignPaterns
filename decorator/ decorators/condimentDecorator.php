<?php

namespace decorator\decorators;

use decorator\components\Beverage;

abstract class condimentDecorator extends Beverage
{
    public abstract function getDescription();
}