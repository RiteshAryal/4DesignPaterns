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
        echo ' --all docs can smim ';
        return $this;
    }

    public function display()
    {
        echo ' --all docs can be seen/display-- ';
        return $this;
    }

    public function performFly()
    {
        $this->flyBehavior->fly();
        return $this;
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
        return $this;
    }

    public function setFlyBehavior(FlyBehaviorInterface $flyBehavior )
    {
        $this->flyBehavior = $flyBehavior;
        return $this;
    }

    public function setQuackBehavior(QuackBehaviorInterface $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
        return $this;
    }
}