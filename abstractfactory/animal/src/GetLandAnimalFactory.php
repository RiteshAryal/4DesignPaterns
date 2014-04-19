<?php
namespace abstrafactory\animal;

use abstrafactory\animal\animals\Cat;
use abstrafactory\animal\animals\Dog;
use abstrafactoryanimal\animals\Rat;

class GetLandAnimalFactory extends AnimalFactory
{
    private $availableAnimal = ['dog', 'cat', 'rat'];
    
    /*
     * Returns Ianimal object
     * @param $type string
     * @return Ianimal object object (eithor cat, dog or rat)
     */
    public function getAnimal($type)
    {
        if (!in_array($type, $this->availableAnimal)) {
            throw new Exception('Object type not found');
        }
        
        switch ($type)
        {
            case 'cat':
                return new Cat();
                break;
            case 'dog':
                return new Dog();
                break;
            case 'rat':
                return new Rat();
                break;
        }
        return null;
    }
}
