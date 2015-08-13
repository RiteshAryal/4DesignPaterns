<?php
/**
 * The Singleton Pattern ensures we've at most one instance
 * of a class in our application.
 * ie. also provides a global access point to that instance.
 *
 */
include_once 'Singleton.php';

$single = singleton::getInstance(); //creates for the first time
$douple = singleton::getInstance();  //still returns the object created before

echo '<pre>';
print_r($single);
echo '</pre>';

echo '<pre>';
print_r($douple);
echo '</pre>';
