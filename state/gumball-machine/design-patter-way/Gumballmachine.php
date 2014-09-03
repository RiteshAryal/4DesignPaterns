<?php
include_once 'Istate.php';
include_once 'SoldOutState.php';
include_once 'NoQuarterState.php';
include_once 'HasQuarterState.php';
include_once 'SoldState.php';

class GumballMachine
{
    private $soldOutState;
    private $noQuarterState;
    private $hasQuarterState;
    private $soldState;
    //state instance variable, which stores current state
    private $state;
    private $count=0;
    
    public function __construct($cnt)
    {
        $this->soldOutState = new SoldOutState($this);
        $this->noQuarterState = new NoQuarterState($this);
        $this->hasQuarterState = new HasQuarterState($this);
        $this->soldState = new SoldState($this);
        
        if ($cnt > 0) {
            $this->count = $cnt;
            $this->state = $this->noQuarterState;
        }
    }
    
    public function insertQuarter()
    {
        $this->state->insertQuarter();
    }
    
    public function ejectQuarter()
    {
        $this->state->ejectQuarter();
    }
    
    public function turnCrank()
    {
        $this->state->turnQrank();
        $this->state->dispense();
    }
    
    //This allows other objects to transition the machine to a different state.
    public function setState(State $state)
    {
        $this->state = $state;
    }
    
    public function releaseBall()
    {
        echo "A gumball comes rolling out the slot...\n";
        if ($this->count !=0) {
            $this->count = $this->count - 1;
        }
    }
    
    public function getNoQuarterState()
    {
        return $this->noQuarterState;
    }
    
    public function getSoldoutState()
    {
        return $this->soldOutState;
    }
    
    public function getSoldState()
    {
        return $this->soldState;
    }
    
    public function getHasQuarterState()
    {
        return $this->hasQuarterState;
    }
    
    public function getCount()
    {
        return $this->count;
    }
    
    public function __toString()
    {
        $str = "Machine has " . $this->getCount() . " gumballs and is in " . get_class($this->state) . " state.\n";
        return $str;
    }
}