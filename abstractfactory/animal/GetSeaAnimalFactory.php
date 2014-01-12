<?php

namespace abstrafactory\animal;

class GetSeaAnimalFactory extends AnimalFactory
{
    private $_availableAnimal = array('whale', 'fish');
    
    /*
     * Returns Ianimal object
     * @param $type string
     * @return Ianimal object object (eithor whale or fish)
     */
    public function getAnimal($type)
    {
        if (!in_array($type, $this->_availableAnimal)) {
            throw new Exception('Object type not found');
        }
        
        switch ($type)
        {
            case 'whale':
                return new \abstrafactory\animal\animals\Whale();
                break;
            case 'fish':
                return new \abstrafactory\animal\animals\Fish();
                break;
        }
    }
}