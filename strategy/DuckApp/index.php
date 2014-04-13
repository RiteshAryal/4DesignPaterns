<?php
include 'MallardDuck.php';

use strategy\DuckApp\flybehavior\FlyWithWings;
use strategy\DuckApp\MallardDuck;

$mallardDuck = new MallardDuck();
$mallardDuck->display();

$mallardDuck->performFly(new FlyWithWings());
$mallardDuck->performQuack(new strategy\DuckApp\quackbehavior\Quack());  