<?php
namespace state\gumballmachine\designpatternway;

/**
 * It is the interface for all states. The methods map directly to actions
 * that could happen to the Gumball Machine.
 * It should contain a methods for every action in the Gumball machine. After that,
 * the state class for every state of the machine will implement it and those class
 * will be responsible for the behavior of the machine when it is in the
 * corresponding state.
 */
interface State
{
    public function insertQuarter();
    public function ejectQuarter();
    public function turnQrank();
    public function dispense();
}
