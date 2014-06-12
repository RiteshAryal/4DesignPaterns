<?php

abstract class CaffeineBeverage
{
    /**
     * Is a Template Method
     * It serves as a template for an algorithm, in this case, an algorithm for making caffeinated beverages.
     * In the template, each steps of the algorithm is represented by a method.
     * Some methods are handled by this class and some are handled by the subclass.
     * Where as, the methods that need to be supplied by a subclass are declared abstract.
     *
     * Its declared final to prevent subclasses from reworking the sequence of steps in the algorithm.
     *
     * It also supports Hollywood Principle: Donot call us, we'll call you.
     */
    final public function prepareReceipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        if ($this->customerWantsCondiments()) {
            $this->addCondiments();
        }
    }

    /* The template method makes use of the primitive Operations to implement an algorithm.
    It is decoupled fom the actual implementation of these operations*/
    abstract public function brew();
    abstract public function addCondiments();

    private function boilWater()
    {
        echo "\n---Boiling Water---";
    }

    private function pourInCup()
    {
        echo "\n---Pouring in Cup---";
    }

    /**
     * ---EXTRA---
     * HOOK
     * We can also have concrete methods that do nothing by default;
     * Subclass are free to override these but don't have to.
     */
    public function customerWantsCondiments()
    {
        return true;
    }
}
