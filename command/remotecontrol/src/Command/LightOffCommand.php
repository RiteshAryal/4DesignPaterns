<?php
namespace Command;

use \Receiver\Light;

class LightOffCommand extends ICommand
{
    private $light;
    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }

    public function getName()
    {
        return "LightOffCommand";
    }
}
