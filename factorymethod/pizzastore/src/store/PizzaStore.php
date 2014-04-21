<?php
namespace store;

abstract class PizzaStore
{
    protected $pizza;

//    public function __construct(\product\Pizza $pz)
//    {
//        $this->pizza = $pz;
//    }

    public function orderPizza($type)
    {
        $this->pizza = $this->createPizza($type);
        $this->pizza->prepare();
        $this->pizza->bake();
        $this->pizza->cut();
        $this->pizza->box();
    }

    abstract public function createPizza($type);
}
