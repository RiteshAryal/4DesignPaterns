<?php
namespace Command;

use \Receiver\Light;

class LightOnCommand extends ICommand
{
    private $light;
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }

    public function getName()
    {
        return "LightOnCommand";
    }
}
