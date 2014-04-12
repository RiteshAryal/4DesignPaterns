<?php

namespace strategy\DuckApp;
use strategy\DuckApp\Duck;

class MallardDuck extends Duck
{
    public function display()
    {
        echo '-Looks like Mallard-';
    }
}