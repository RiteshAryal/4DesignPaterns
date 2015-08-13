<?php
namespace state\gumballmachine\designpatternway;

class SoldOutState implements State
{
    private $gumballmachine;

    public function __construct($gbm)
    {
        $this->gumballmachine = $gbm;
    }

    public function insertQuarter()
    {
        echo "Oops!, there is no Gumball available coz its SOLD OUT!!! so cannot accept quarter\n";
    }

    public function ejectQuarter()
    {
        echo "Oops! No quarter available so cannot Eject it.\n";
    }

    public function turnQrank()
    {
        echo "Oops! No quarter available so cannot Turn Qrank.\n";
    }

    public function dispense()
    {
        echo "Oops, cannot dispense anything coz Gumball is sold out.\n";
    }

}