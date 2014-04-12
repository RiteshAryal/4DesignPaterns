<?php

namespace strategy\DuckApp\flybehavior;
use strategy\DuckApp\flybehavior\FlyBehaviorInterface;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        echo '---donot fly---';
    }
}