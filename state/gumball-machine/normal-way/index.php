<?php

include_once 'GumballMachine.php';

$gumballMachine = new GumballMachine(5);
echo $gumballMachine;
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
echo $gumballMachine;
echo "\n";

$gumballMachine->insertQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->turnCrank();
echo $gumballMachine;
echo "\n";

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->turnCrank();
echo $gumballMachine;

echo "\n";
$gumballMachine->insertQuarter();
$gumballMachine->insertQuarter();
echo $gumballMachine;