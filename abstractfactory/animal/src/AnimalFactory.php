<?php
namespace abstrafactory\animal;

/**
 * Abstract Factory Design Pattern
 * Factory of Factory (super-factory) is also extension to Factory Pattern
 * Creational Pattern > Abstract Factory
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
     * @param string $type
     */
    public static function getAnimalFactory($type)
    {
        if (!in_array($type, ['land', 'sea'])) {
            throw new \Exception('Animal Type not found');
        }

        switch ($type)
        {
            case 'land':
                return new GetLandAnimalFactory();
                break;
            case 'sea':
                return new GetSeaAnimalFactory();
        }
        return null;
    }
}
