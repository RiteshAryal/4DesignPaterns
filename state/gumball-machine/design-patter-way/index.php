<?php
include_once 'Gumballmachine.php';

 /**
  * State Pattern: allows an object to alter its behavior when its internal state changes.
  * 
  */

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
