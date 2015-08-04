<?php
namespace strategy\DuckApp\quackbehavior;

class MuteQuack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo ' ---do nothing - ie. cannot quack';
    }
}