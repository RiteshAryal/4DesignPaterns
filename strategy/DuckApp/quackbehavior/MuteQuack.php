<?php

namespace strategy\DuckApp\quackbehavior;
use strategy\DuckApp\quackbehavior\QuackBehaviorInterface;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo '---do nothing - ie. cannot quack';
    }
}