<?php

namespace abstrafactory\animal;

class GetLandAnimalFactory extends AnimalFactory
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
                return new \abstrafactory\animal\animals\Cat();
                break;
            case 'dog':
                return new \abstrafactory\animal\animals\Dog();
                break;
            case 'rat':
                return new \abstrafactory\animal\animals\Rat();
                break;
        }
    }
}