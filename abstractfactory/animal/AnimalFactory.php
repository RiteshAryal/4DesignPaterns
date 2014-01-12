<?php

namespace abstrafactory\animal;
use abstrafactory\animal\GetLandAnimalFactory;
use abstrafactory\animal\GetSeaAnimalFactory;

include_once 'GetLandAnimalFactory.php';
include_once 'GetSeaAnimalFactory.php';
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
    abstract public function getAnimal($type);
    
    /**
     * Returns either landAnimal or seaAnimal object
     * @param type $type styring
     */
    public static function getAnimalFactory($type)
    {
        if (!in_array($type, array('land', 'sea'))) {
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