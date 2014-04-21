<?php

class SimplePizzaFactory
{
    /* @var pizza/Pizzas */
    private $pizza;

//    public function __construct(pizza\Pizzas $pz)
//    {
//        $this->pizza = $ps;
//    }

    public static function createPizza($type)
    {
        $pizza = null;
        switch (strtolower($type))
        {
            case 'cheese':
                $pizza = new pizza\CheesePizza();
                break;
            case 'veggie':
                $pizza = new pizza\VeggiePizza();
                break;
            case 'clam':
                $pizza = new pizza\ClamPizza();
                break;
            case 'pepperoni':
                $pizza = new pizza\PepperoniPizza();
                break;
        }
        return $pizza;
    }
}
