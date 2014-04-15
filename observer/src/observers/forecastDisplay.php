<?php

namespace observers;

use observers\displayElementInterface;
use observers\observerInterface;
use subject\weatherData;

class forecastDisplay implements displayElementInterface, observerInterface
{
    private $temperature;
    private $humidity;
    private $pressure;
    private $weatherData;
    
    public function __construct(weatherData $wd)
    {
        $this->weatherData = $wd;
        $this->weatherData->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        
        $this->display();
    }
    public function display()
    {
        echo "<hr/>";
        echo "Forecast Display: " . $this->temperature .
                " F degrees, Humidity: " . $this->humidity .
                "% and Pressure: " . $this->pressure;
    }
}