<?php

//Autoload all classes from with /CD
function __autoload($class)  {
    $fileName =  __DIR__ . str_replace('\\','/', $class) . '.php';
    include ($fileName);   
}

//Actual Strategy Implementation
$mycd = new CdStrategy('Chhekyoo Chhekyoo', 'Nepathya');

//xml output
$mycd->setStrategry(new CdAsXML());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';

//json output
$mycd->setStrategry(new CdAsJson());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';

//array output
$mycd->setStrategry(new CdAsArray());
echo '<pre>'; print_r($mycd->get()); echo '</pre>';
