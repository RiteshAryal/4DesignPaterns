<?php

function __autoload($class)
{
    $fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

$animal = new GetAnimalFactory();
$cat = $animal->getAnimal('cat');
echo "Cat speaks: " . $cat->speak() . "\n";

$dog = $animal->getAnimal('dog');
echo "Dog speaks: " . $dog->speak() . "\n";

$rat = $animal->getAnimal('rat');
echo "Rat speaks: " . $rat->speak() . "\n";
