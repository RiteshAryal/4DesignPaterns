<?php
include 'MallardDuck.php';

use strategy\DuckApp\flybehavior\FlyWithWings;
use strategy\DuckApp\quackbehavior\Quack;
use strategy\DuckApp\MallardDuck;
use strategy\DuckApp\DecoyDuck;

function __autoload($class)
{
    $parts = explode('\\', $class);

    if (!file_exists(end($parts) . '.php')) {
        require $parts[2] . '\\' . end($parts) . '.php';
    } else {
        require end($parts) . '.php';
    }

}

//couple of examples
$mallardDuck = new MallardDuck();
$mallardDuck
    ->display()
    ->swim()
    ->setFlyBehavior(new FlyWithWings())
    ->performFly()
    ->setQuackBehavior(new Quack())
    ->performQuack();

$decorDuck = new DecoyDuck();
$decorDuck
    ->display()
    ->swim()
    ->setFlyBehavior(new \strategy\DuckApp\flybehavior\FlyNoWay())
    ->performFly()
    ->setQuackBehavior(new \strategy\DuckApp\quackbehavior\Squeak())
    ->performQuack();

