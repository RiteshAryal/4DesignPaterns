<?php
namespace Command;

use \Receiver\Stereo;

class StereoOffWithCDCommand extends ICommand
{
    private $stereo;
    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->stereo->off();
    }

    public function getName()
    {
        return "StereoOffWithCDCommand";
    }
}
