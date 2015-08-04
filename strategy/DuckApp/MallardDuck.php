<?php
namespace strategy\DuckApp;

class MallardDuck extends Duck
{
    public function display()
    {
        echo ' -Looks like Mallard- ';
        return $this;
    }
}