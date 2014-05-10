<?php
namespace Receiver;

class Stereo
{
    public function on()
    {
        echo "\n---Stereo On---\n";
    }

    public function off()
    {
        echo "\n---Stereo Off---\n";
    }

    public function setCd()
    {
        echo "\n---Stereo Set CD---\n";
    }

    public function setDvd()
    {
        echo "\n---Stereo Set DVD---\n";
    }

    public function setRadio()
    {
        echo "\n---Stereo Set Radio---\n";
    }

    public function setVolume($volume)
    {
        echo "\n---Stereo Set Volume $volume---\n";
    }
}
