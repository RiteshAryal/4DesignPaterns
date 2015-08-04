<?php
namespace strategy\DuckApp;

class DecoyDuck extends Duck
{
    public function display()
    {
        echo ' -Looks like DecoyDuck- ';
        return $this;
    }
}