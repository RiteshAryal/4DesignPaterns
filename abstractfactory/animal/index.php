<?php

include_once 'AnimalFactory.php';

/*Get sea animal object to get Whale object*/
$seaAnimalFactory = AnimalFactory::getAnimalFactory('sea');
var_dump($animalFactory);
$whale = $seaAnimalFactory->getAnimal('whale');
echo $whale->speak();

/*Get land animal object to get Dog object*/
$landAnimalFactory = AnimalFactory::getAnimalFactory('land');
var_dump($landAnimalFactory);
$dog = $seaAnimalFactory->getAnimal('dog');
echo $dog->speak();