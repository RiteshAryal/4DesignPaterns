<?php
/**
 * Strategy Pattern
 * It is used when we've multiple options (or algorithm) available for a particular task (or problem) 
 * and we select either one of those solution at run time.
 * Eg: we've a CD object with initialized values (title, band) as below.
 * And we want that object to be exported as XML or Array or Json at run time.
 * 
 * @category   Strategy Pattern
 * @package    Design Patterns
 * @author     Ritesh Aryal <riteshrajaryal@yahoo.com>
 * @since      1-Jan-2014
 * 
 * 
 */
use strategy\CD\CdAsArray;
use strategy\CD\CdAsJson;
use strategy\CD\CdAsXML;
use strategy\CD\CdStrategy;

//Autoload all classes from within /CD
function __autoload($class) {
  $file = __DIR__ . '/../../' . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

  //var_dump(file_exists($file));
  if (!file_exists($file)) {
    return false;
  } else {
    require $file;
    return true;
  }
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
