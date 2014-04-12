<?php

namespace strategy\DuckApp;
use strategy\DuckApp\Duck;

class DecoyDuck extends Duck
{
    public function display()
    {
        echo '-Looks like DecoyDuck-';
    }
}