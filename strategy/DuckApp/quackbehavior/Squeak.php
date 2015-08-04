<?php
namespace strategy\DuckApp\quackbehavior;

class Squeak implements QuackBehaviorInterface
{
    public function quack()
    {
        echo ' --rubber duckie squeak--- ';
        return $this;
    }
}