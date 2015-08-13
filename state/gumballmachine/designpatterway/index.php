<?php
use \state\gumballmachine\designpatternway\GumballMachine,
    \state\gumballmachine\designpatternway\SoldOutState,
    \state\gumballmachine\designpatternway\HasQuarterState,
    \state\gumballmachine\designpatternway\NoQuarterState,
    \state\gumballmachine\designpatternway\SoldState;

 /**
  * State Pattern: allows an object to alter its behavior when its internal state changes.
  *
  */

function __autoload($class)
{
    $parts = explode('\\', $class);

    require end($parts) . '.php';
}

$gbm = new GumballMachine(10);

$soldOutGb = new SoldOutState($gbm);
$hasQuarterGb = new HasQuarterState($gbm);
$noQuarterGb = new NoQuarterState($gbm);
$soldGb = new SoldState($gbm);

//buy a gumball
$gbm->insertQuarter();
$gbm->turnCrank();
echo "\n";

//insert quarter and eject it and turn the crank
$gbm->insertQuarter();
$gbm->ejectQuarter();
$gbm->turnCrank();
echo "\n";

//insert twice
$gbm->insertQuarter();
$gbm->insertQuarter();
echo $gbm;

//we can also add any other sequence of action
//etc...etc...etc