<?php

class GumballMachine
{
    //Four states of Gumball Machine
    const SOLD_OUT = 0;
    const NO_QUARTER = 1;
    const HAS_QUARTER = 2;
    const SOLD = 3;
    
    //the instance variable that is going to keep tract of the current state
    //ie. SOLD_OUT state at the beginning
    private $state = self::SOLD_OUT;
    private $count = 0;
    
    //The constructor takes an initial inventory of gumballs.
    //And if the inventory isn't zero, the machine enters state NO_QUARTER 
    //ie. waiting for someone to insert a quarter, otherwise it stays in the SOLD_OUT state.
    public function __construct($cnt) {
        $this->count = $cnt;
        if ($cnt > 0) {
            $this->state = self::NO_QUARTER;
        }
    }
    
    //Runs - when a quarter is inserted
    public function insertQuarter()
    {
        if ($this->state == self::HAS_QUARTER) {
            echo "You cannot insert another quarter\n";
        } elseif ($this->state == self::NO_QUARTER) {
            //at this point, we accept the quarter and transtion to HAS_QUARTER state
            $this->state = self::HAS_QUARTER;
            echo "You have inserted a quarter\n";
        } elseif ($this->state == self::SOLD_OUT) {
            echo "You cannot insert a quarter, bcoz the machine is sold out\n";
        } elseif ($this->state == self::SOLD) {
            //if the customer just bought a gumball he needs to wait until the 
            //transaction is complete before inserting another quarter.
            echo "Please wait, we are already giving you a gumball\n";
        }
    }
    
    //Now, if the customer tries to remove the quarter
    public function ejectQuarter() 
    {
        if ($this->state == self::HAS_QUARTER) {
            //if there is a quarter, we return it and go back to the NO_QUARTER state.
            echo "Quarter returned\n";
            $this->state = self::NO_QUARTER;
        } elseif ($this->state == self::NO_QUARTER) {
            echo "You havenot inserted a quarter\n";
        } elseif ($this->state == self::SOLD) {
            echo "Sorry, you already turned the crank\n";
        } elseif ($this->state == self::SOLD_OUT) {
            echo "You cannot eject, you havenot inserted a quarter yet\n";
        }
    }
    
    public function turnCrank()
    {
        if ($this->state == self::SOLD) {
            echo "Turning twice doesnot get you another gumball!\n";
        } elseif ($this->state == self::NO_QUARTER) {
            echo "You turned but there is not quarter\n";
        } elseif ($this->state == self::SOLD_OUT) {
            echo "You turned, but there are no gumballs\n";
        } elseif ($this->state == self::HAS_QUARTER) {
            echo "You turned...\n";
            $this->state = self::SOLD;
            $this->dispense();
        }
    }
    
    public function dispense()
    {
        if ($this->state == self::SOLD) {
            echo "A gumball comes rolling out the slot\n";
            $this->count = $this->count - 1;
            if ($this->count == 0) {
                echo "Opps, out of gumballs!\n";
                $this->state == self::SOLD_OUT;
            } else {
                $this->state = self::NO_QUARTER;
            }
        } elseif ($this->state == self::NO_QUARTER) {
            echo "You need to pay first\n";
        } elseif ($this->state == self::SOLD_OUT) {
            echo "No gumball dispensed\n";
        } elseif ($this->state == self::HAS_QUARTER) {
            echo "No gumball dispensed\n";
        }
    }
    
    public function refill($cnt)
    {
        $this->count = $this->count + $cnt;
        if ($this->count > 0) {
            $this->state = self::NO_QUARTER;
        }
    }
    
    public function __toString() {
        if ($this->state == self::NO_QUARTER) {
            return "The machine is in NO QUARTER state.\n";
        } elseif ($this->state == self::HAS_QUARTER) {
            return "The machine is in HAS QUARTER state.\n";
        } else {
            echo "---ISnot on any state---\n";
        }
    }
}
