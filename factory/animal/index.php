<?php

use factory\animal\GetAnimalFactory;

//Autoload all classes from within /CD
function __autoload($class) {
  $file = __DIR__ . '/../../' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
  
  //var_dump(file_exists($file));
  if (!file_exists($file)) {
    return false;
  } else {
    require $file;
    return true;
  }
}

$animal = new GetAnimalFactory();
$cat = $animal->getAnimal('cat');
echo "Cat speaks: " . $cat->speak() . "\n";

$dog = $animal->getAnimal('dog');
echo "Dog speaks: " . $dog->speak() . "\n";

$rat = $animal->getAnimal('rat');
echo "Rat speaks: " . $rat->speak() . "\n";



        