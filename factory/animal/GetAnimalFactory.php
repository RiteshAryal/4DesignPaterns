<?php

/**
 * Factory Design Pattern
 * Creating object without exposing the creation logic to client. Furthermore, 
 * if we've several derived classes and we've to get object of the selected
 * class (based on some logic) then we've use it. Which is basically acceived
 * based on the parameter we pass during run time.
 * 
 * ie. centralized place to create object
 * @category   Factory Pattern
 * @package    Design Patterns
 * @author     Ritesh Aryal <riteshrajaryal@yahoo.com>
 * @since      6-Jan-2014
 * 
 * 
 */

namespace factory\animal;

class GetAnimalFactory
{
    private $_availableAnimal = array('dog', 'cat', 'rat');
    
    /*
     * Returns Ianimal object
     * @param $type string
     * @return Ianimal object object (eithor cat, dog or rat)
     */
    public function getAnimal($type)
    {
        if (!in_array($type, $this->_availableAnimal)) {
            throw new Exception('Object type not found');
        }
        
        switch ($type)
        {
            case 'cat':
                return new \factory\animal\animals\Cat();
                break;
            case 'dog':
                return new \factory\animal\animals\Dog();
                break;
            case 'rat':
                return new \factory\animal\animals\Rat();
                break;
        }
    }
}