<?php

function __autoload($class)
{
    $fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

$veggiPizza = SimplePizzaFactory::createPizza('veggie');
$veggiPizza->prepare();
$veggiPizza->bake();
$veggiPizza->cut();
$veggiPizza->box();

$clamPizza = SimplePizzaFactory::createPizza('clam');
$clamPizza->prepare();
$clamPizza->bake();
$clamPizza->cut();
$clamPizza->box();
