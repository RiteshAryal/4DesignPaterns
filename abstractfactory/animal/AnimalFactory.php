<?php

namespace abstrafactory\animal;


/**
 * Abstract Factory Design Pattern
 * ie. Factory of Factory
 * 
 * ie. centralized place to create objects of object
 * @category   Abstract Factory Pattern
 * @package    Design Patterns
 * @author     Ritesh Aryal <riteshrajaryal@yahoo.com>
 * @since      12-Jan-2014
 * 
 * 
 */

abstract class AnimalFactory
{
    private $_availableType = array('land', 'sea');
    
    abstract public function getAnimal($type);
    
    /**
     * Returns either landAnimal or seaAnimal object
     * @param type $type styring
     */
    public static function getAnimalFactory($type)
    {
        if (!in_array($type, $this->_availableType)) {
            throw new \Exception('Animal Type not found');
        }
        switch ($type)
        {
            case 'land':
                return new \abstrafactory\animal\GetLandAnimalFactory();
                break;
            case 'sea':
                return new \abstrafactory\animal\GetSeaAnimalFactory();
        }
    }
}