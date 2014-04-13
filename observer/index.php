<?php

use observer\observers\weatherDisplay;
use observer\subject\weatherData;

$weatherData = new weatherData();

$weatherDisplay = new weatherDisplay($weatherData);
$weatherData->setMeasurements(22, 88, 10.12);