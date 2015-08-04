<?php
namespace strategy\DuckApp\flybehavior;

class FlyWithWings implements FlyBehaviorInterface
{
    public function fly()
    {
        echo ' ---implements Duck flying--- ';
    }
}