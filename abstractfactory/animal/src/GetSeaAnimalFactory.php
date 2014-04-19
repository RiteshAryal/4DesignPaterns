<?php
namespace abstrafactory\animal;

use abstrafactory\animal\animals\Whale;
use abstrafactory\animal\animals\Fish;

class GetSeaAnimalFactory extends AnimalFactory
{
    private $availableAnimal = ['whale', 'fish'];
    
    /*
     * Returns Ianimal object
     * @param $type string
     * @return Ianimal object object (eithor whale or fish)
     */
    public function getAnimal($type)
    {
        if (!in_array($type, $this->availableAnimal)) {
            throw new Exception('Object type not found');
        }
        
        switch ($type)
        {
            case 'whale':
                return new Whale();
                break;
            case 'fish':
                return new Fish();
                break;
        }
        return null;
    }
}
