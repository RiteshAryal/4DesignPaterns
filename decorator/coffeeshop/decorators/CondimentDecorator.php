<?php
/**
 * Each decorator HAS-A (wraps) a component, which means the decorator
 * has an instace variable that holds a reference to a component
 */
namespace decorators;

use components\Beverage;

abstract class CondimentDecorator extends Beverage
{
    public function getDescription()
    {
        return null;
    }
}
