<?php

namespace strategy\DuckApp\quackbehavior;
use strategy\DuckApp\quackbehavior\QuackBehaviorInterface;

class Quack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo '---duck quacking---';
    }
}