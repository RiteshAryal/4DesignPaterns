<?php
namespace Command;

abstract class ICommand
{
    abstract public function execute();

    public function getName()
    {
        return __CLASS__;
    }
}
