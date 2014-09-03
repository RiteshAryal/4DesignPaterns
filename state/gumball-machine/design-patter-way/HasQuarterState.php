<?php
require_once 'Istate.php';

class HasQuarterState implements State
{
    private $gumballmachine;
    
    public function __construct($gbm)
    {
        $this->gumballmachine = $gbm;
    }
    
    public function insertQuarter()
    {
        echo "You cannot insert another quarter\n";
    }
    
    //Return the customer's quarter and transition back to the NoQuarterState.
    public function ejectQuarter()
    {
        echo "Quarter returned\n";
        $this->gumballmachine->setState($this->gumballmachine->getNoQuarterState());
    }
    
    public function turnQrank()
    {
        echo "You turned...\n";
        $this->gumballmachine->setState($this->gumballmachine->getSoldState());
        
    }
    
    public function dispense()
    {
        echo "No gumball dispensed\n";
    }
    
}