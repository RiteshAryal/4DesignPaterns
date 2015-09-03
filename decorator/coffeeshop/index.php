<?php
/**
 * The Decorator Pattern attaches additional responsibilities to an object
 * dynamically. Decorators provide a flexible alternative to subclassing for 
 * extening functionality.
 * 
 */
function __autoload($class)
{
    $fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

use components\DarkRoast;
use components\Decaf;
use components\Espresso;
use components\HouseBlend;
use decorators\Mocha;
use decorators\Soy;
use decorators\SteamedMilk;
use decorators\Whip;

$darkRoast = new HouseBlend();
$houseBlendWithMocha = new Mocha($darkRoast);
echo $houseBlendWithMocha->getDescription() . ' Cost: ' . $houseBlendWithMocha->cost();
echo "\n";

$decaf = new Decaf();
$decafWithSoy = new Soy($decaf);
$decafDoubleSoy = new Soy($decafWithSoy);
echo $decafDoubleSoy->getDescription() . ' Cost: ' . $decafDoubleSoy->cost();
echo "\n";
