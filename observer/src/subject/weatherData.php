<?php

namespace subject;

use observers\observerInterface;
use subject\subjectInterface;

class weatherData implements subjectInterface
{
    private $observers = array();
    private $temperature;
    private $humidity;
    private $pressure;

    public function registerObserver(observerInterface $o)
    {
        $this->observers[] = $o;
    }
    
    public function removeObserver(observerInterface $o)
    {     
        $index = array_search($o, $this->observers);

        if (false !== $index) {
            unset($this->observers[$index]);
        }
    }
    
    /**
     * Here's the fun part this is where we tell all the observers about the state.
     * Because they are all Observers, we know they all implement update()
     */
    public function notifyObservers()
    {
        foreach ($this->observers as $obj) {
            $obj->update(
                    $this->temperature,
                    $this->humidity,
                    $this->pressure);
        }
    }
    
    /**
     * We notify the observers when we get updated values from Weather Stations.
     * ie. using some API interaction with some 3rd party app
     */
    public function measurementsChanged()
    {
        $this->notifyObservers();
    }
    
    public function setMeasurements($temperature, $humidity, $pressure)
    {
        $this->temperature = $temperature;
        $this->humidity = $humidity;
        $this->pressure = $pressure;
        
        $this->measurementsChanged();
    }
}