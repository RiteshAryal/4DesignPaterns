<?php
namespace decorators;

use components\Beverage;

abstract class CondimentDecorator extends Beverage
{
    abstract public function getDescription();
}
