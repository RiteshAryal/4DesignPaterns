<?php
/**
 * Im having namespace and autoloader based errro - can anybody please help me to resolve it.
 * Problem: in this implementation, NameSpace is looking like correct but the autoloader cannot load 
 * all the classes :(
 */
use abstrafactory\animal\AnimalFactory;

include_once 'AnimalFactory.php';

/*Get sea animal object to get Whale object*/
$seaAnimalFactory = AnimalFactory::getAnimalFactory('sea');
$whale = $seaAnimalFactory->getAnimal('whale');
echo $whale->speak() . "\n";

/*Get land animal object to get Dog object*/
//$landAnimalFactory = AnimalFactory::getAnimalFactory('land');
//var_dump($landAnimalFactory);
//$dog = $seaAnimalFactory->getAnimal('dog');
//echo $dog->speak();