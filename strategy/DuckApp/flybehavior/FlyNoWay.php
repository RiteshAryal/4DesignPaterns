<?php
namespace strategy\DuckApp\flybehavior;

class FlyNoWay implements FlyBehaviorInterface
{
    public function fly()
    {
        echo ' ---donot fly--- ';
    }
}