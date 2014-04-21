<?php

function __autoload($class)
{
    $fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

$nyPizzaStore = new \store\NYPizzaStore();
$nyPizzaStore->orderPizza('cheese');

$chiPizzaStore = new \store\ChicagoPizzaStore();
$chiPizzaStore->orderPizza('veggie');
