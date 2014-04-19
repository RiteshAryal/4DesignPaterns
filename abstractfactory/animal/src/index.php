<?php

function __autoload($class)
{
    $fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

/*Get sea animal object to get Whale object*/
$seaAnimalFactory = AnimalFactory::getAnimalFactory('sea');
$whale = $seaAnimalFactory->getAnimal('whale');
echo $whale->speak() . "\n";
