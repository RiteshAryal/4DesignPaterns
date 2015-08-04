<?php
namespace strategy\DuckApp;

class RubberDuck extends Duck
{
    public function display()
    {
        echo ' -Looks like RubberDuck- ';
        return $this;
    }
}