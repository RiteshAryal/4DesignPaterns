<?php

namespace strategy\DuckApp\flybehavior;
use strategy\DuckApp\flybehavior\FlyBehaviorInterface;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        echo '---implements Duck flying---';
    }
}