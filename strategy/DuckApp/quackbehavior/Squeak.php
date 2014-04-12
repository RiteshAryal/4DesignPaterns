<?php

namespace strategy\DuckApp\quackbehavior;
use strategy\DuckApp\quackbehavior\QuackBehaviorInterface;

class Squeak implements QuackBehaviorInterface
{
    public function quack()
    {
        echo '--rubber duckie squeak---';
    }
}