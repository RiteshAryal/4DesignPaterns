<?php
/**
 * publishers + subscribers = observer pattern
 * ie. The Observer Pattern defines a one-to-many dependency between objects
 * so what when one object changes state, all of its dependents are notified
 * and updated automatically.
 * 
 * Points to remember
 * - Subjects, or as we also know them, Observables, update Observers using a common interface.
 * - Observers are loosely coupled in that the Observable knows nothing about them, other than that they implement the ObserverInterface.
 * - We can push or pull data from the Observable when using the patterns (pull is always better)
 * - Remember, loosely coupled designs are mch more flexible and resilient to changes.
 */

function __autoload($class) {
    $fileName =  __DIR__ . '/src/' . str_replace('\\','/', $class) . '.php';
    include ($fileName);   
}

use observers\currentCondition;
use observers\statisticsDisplay;
use observers\forecastDisplay;
use subject\weatherData;

//subject
$weatherData = new weatherData();

//observer 1
$currentCondition = new currentCondition($weatherData);
$currentCondition->setMeasurements(22, 88, 10.12);

//observer 2
$statisticsDisplay = new statisticsDisplay($weatherData);
$statisticsDisplay->setMeasurements(33, 77, 12.02);

//observer 3
$forecastDisplay = new statisticsDisplay($weatherData);
$forecastDisplay->setMeasurements(11, 98, 09.09);