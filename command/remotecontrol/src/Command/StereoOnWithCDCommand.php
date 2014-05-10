<?php
namespace Command;

use \Receiver\Stereo;

class StereoOnWithCDCommand extends ICommand
{
    private $stereo;
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(3);
    }

    public function getName()
    {
        return "StereoOnWithCDCommand";
    }
}
