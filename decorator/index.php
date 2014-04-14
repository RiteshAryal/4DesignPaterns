<?php
/**
 * The Decorator Pattern attaches additional responsibilities to an object
 * dynamically. Decorators provide a flexible alternative to subclassing for 
 * extening functionality.
 * 
 */
function __autoload($class)
{
    $parts = explode('\\', $class);
    if (file_exists('components/'. end($parts) . '.php')) {
        require 'components/'. end($parts) . '.php';
    } else if (file_exists('decorators/'. end($parts) . '.php')){
        require 'decorators/'. end($parts) . '.php';
    } else {
        die('cannot load file');
    }
}

use decorator\components\DarkRoast;
use decorator\components\Espresso;
use decorator\decorators\soy;

//$esspresso = new Espresso();
//echo $esspresso->getDescription() . ' cost: ' . $esspresso->cost();
//echo "\n";
$darkRoast = new DarkRoast();
$darkRoast = new soy($darkRoast);
echo $darkRoast->getDescription() . ' cost: ' . $darkRoast->cost();
echo "\n";