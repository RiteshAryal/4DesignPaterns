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

function __autoload($class)
{
    $fileName =  __DIR__ . '/src/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

use observers\CurrentCondition;
use observers\StatisticsDisplay;
use observers\ForecastDisplay;
use subject\WeatherData;

//subject
$weatherData = new WeatherData();

//observer 1
$currentCondition = new CurrentCondition($weatherData);
//observer 2
$statisticsDisplay = new StatisticsDisplay($weatherData);
//observer 3
$forecastDisplay = new ForecastDisplay($weatherData);

//Subject's state changes here. And finally Sobject will notify all the registered Observers
$weatherData->setMeasurements(33, 77, 12.02);

echo "\n";
