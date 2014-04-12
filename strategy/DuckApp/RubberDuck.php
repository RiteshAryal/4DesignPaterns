<?php

namespace strategy\DuckApp;
use strategy\DuckApp\Duck;

class RubberDuck extends Duck
{
    public function display()
    {
        echo '-Looks like RubberDuck-';
    }
}