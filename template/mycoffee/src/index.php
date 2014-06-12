<?php
/**
 * Template Method Pattern defines the skeleton of an algorithm in a method,
 * deferring some steps to subclasses. Template Method lets subclasses
 * redefine certain steps of an algoithm without changling the algorithm
 * without changing the algorithm's structure.
 *
 * Here, The AbstractClass contains the template method and abstract versions
 *of the operations used in the template method.
 */

function __autoload($class)
{
    $fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

$tea = new Tea();
$tea->prepareReceipe();
echo "\n\n";

$coffee = new Coffee();
$coffee->prepareReceipe();
echo "\n\n";