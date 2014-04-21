<?php
namespace store;

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $pizza = null;
        switch (strtolower($type))
        {
            case 'cheese':
                $pizza = new \product\ChicagoPizzaStore\ChicagoStyleCheesePizza();
                break;
            case 'veggie':
                $pizza = new \product\ChicagoPizzaStore\ChicagoStyleVeggiePizza();
                break;
            case 'clam':
                $pizza = new \product\ChicagoPizzaStore\ChicagoStyleClamPizza();
                break;
            case 'pepperoni':
                $pizza = new \product\ChicagoPizzaStore\ChicagoStylePepperoniPizza();
                break;
        }
        return $pizza;
    }
}
