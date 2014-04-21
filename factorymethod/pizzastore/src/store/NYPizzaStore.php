<?php
namespace store;

class NYPizzaStore extends PizzaStore
{
    public function createPizza($type)
    {
        $pizza = null;
        switch (strtolower($type))
        {
            case 'cheese':
                $pizza = new \product\NYPizzaStore\NYStyleCheesePizza();
                break;
            case 'veggie':
                $pizza = new \product\NYPizzaStore\NYStyleVeggiePizza();
                break;
            case 'clam':
                $pizza = new \product\NYPizzaStore\NYStyleClamPizza();
                break;
            case 'pepperoni':
                $pizza = new \product\NYPizzaStore\NYStylePepperoniPizza();
                break;
        }
        return $pizza;
    }
}
