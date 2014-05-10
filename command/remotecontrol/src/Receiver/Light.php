<?php
namespace Receiver;

/**
 * ...which results in the actions being invoked on the Receiver.
 *
 * Class Light
 * @package Receiver
 */
class Light
{
    public function on()
    {
        echo "\n---Light is On---\n";
    }

    public function off()
    {
        echo "\n---Light if Off---\n";
    }
}
