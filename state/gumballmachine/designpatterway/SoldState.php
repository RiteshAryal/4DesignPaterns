<?php
namespace state\gumballmachine\designpatternway;

class SoldState implements State
{
    private $gumballmachine;

    public function __construct($gbm)
    {
        $this->gumballmachine = $gbm;
    }

    public function insertQuarter()
    {
        echo "Please wait, we're already giving you a gumball\n";
    }

    public function ejectQuarter()
    {
        echo "Sorry, you already turned the crank\n";
    }

    public function turnQrank()
    {
        echo "Turning twice doesn't get you another gumball!\n";
    }

    public function dispense()
    {
        $this->gumballmachine->releaseBall();
        if ($this->gumballmachine->getCount() > 0) {
            $this->gumballmachine->setState($this->gumballmachine->getNoQuarterState());
        } else {
            echo "Oops, out of gumballs!\n";
            $this->gumballmachine->setState($this->gumballmachine->getSoldOutState());
        }
    }

}