<?php
namespace state\gumballmachine\designpatternway;

class NoQuarterState implements State
{
    private $gumballmachine;

    public function __construct($gbm)
    {
        $this->gumballmachine = $gbm;
    }

    public function insertQuarter()
    {
        echo "You inserted a quarter\n";
        $this->gumballmachine->setState($this->gumballmachine->getHasQuarterState());

   }

    public function ejectQuarter()
    {
        echo "You haven't inserted a quarter\n";
    }

    public function turnQrank()
    {
        echo "You've turned, but there's no quarter\n";
    }

    public function dispense()
    {
        echo "You need to pay first\n";
    }

}