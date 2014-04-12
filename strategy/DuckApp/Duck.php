<?php

namespace strategy\DuckApp;
use strategy\DuckApp\flybehavior\FlyBehaviorInterface;
use strategy\DuckApp\quackbehavior\QuackBehaviorInterface;

class Duck
{
    /*@var strategy\DuckApp\flybehavior\FlyBehaviorInterface; */
    private $flyBehavior;
    
    /* @var strategy\DuckApp\quackbehavior\QuackBehaviorInterface; */
    private $quackBehavior;
    
    public function swim()
    {
        echo '--all docs can smim';
    }
    
    public function display()
    {
        echo '--all docs can be seen/display--';
    }
    
    public function performFly()
    {
        $this->flyBehavior->fly();
    }
    
    public function performQuack()
    {
        $this->quackBehavior->quack();
    }
    
    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior )
    {
        $this->flyBehavior = $flyBehavior;
    }
    
    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
}