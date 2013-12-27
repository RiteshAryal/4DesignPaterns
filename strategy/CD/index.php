<?php
use strategy\CD;

//Autoload all classes from within /CD
function __autoload($class)  {
    $fileName =  __DIR__ . '/' . $class . '.php';
    include $fileName;
}

//Actual Strategy Implementation
$mycd = new CdStrategy('Engine Gadi Ma Ho Engine Gadima', 'Anil Singh');

//xml output
$mycd->setStrategry(new CdAsXML());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';

//json output
$mycd->setStrategry(new CdAsJson());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';

//array output
$mycd->setStrategry(new CdAsArray());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';
