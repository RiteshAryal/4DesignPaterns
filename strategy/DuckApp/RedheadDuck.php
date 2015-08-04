<?php
namespace strategy\DuckApp;

class RedheadDuck extends Duck
{
    public function display()
    {
        echo ' -Looks like RedheadDuck- ';
        return $this;
    }
}