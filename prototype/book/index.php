<?php

/**
 * Prototype Design Pattern
 * It is all about cloning an object
 * Because, performancewise it is considerably a wise idea and less expensive
 * to clone objects than creating a new object afresh (using new operator)
 * 
 * Creation Pattern > Prototype Pattern
 * 
 * @category   Prototype Pattern
 * @package    Design Patterns
 * @author     Ritesh Aryal <riteshrajaryal@yahoo.com>
 * @since      13-Jan-2014
 * 
 * 
 */

include_once 'PhpBookPrototype.php';

$phpBook1 = new PHPBookPrototype();

$phpBook2 = clone $phpBook1;


$phpBook1->setTitle('My PHP Book');
$phpBook2->setTitle('Copied PHP Book');

echo $phpBook1;
echo $phpBook2;

$phpBook3 = clone $phpBook2;
echo $phpBook3;
$phpBook3->setTitle('New Design Pattern - PHP');
echo $phpBook3;