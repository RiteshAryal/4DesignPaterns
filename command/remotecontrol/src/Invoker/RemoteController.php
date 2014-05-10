<?php
namespace Invoker;

use \Command\NoCommand;
use \Command\ICommand;

class RemoteController
{
    private $onCommand = [];
    private $offCommand = [];

    /**
     * Lets assume that the remote control has 5 slots
     */
    public function __construct()
    {
        $noCommand = new NoCommand();
        for ($i=0; $i<=4; $i++) {
            $this->onCommand[$i] = $noCommand;
            $this->offCommand[$i] = $noCommand;
        }
    }

    public function setCommand($slot, ICommand $onCommand, ICommand $offCommand)
    {
        $this->onCommand[$slot] = $onCommand;
        $this->offCommand[$slot] = $offCommand;
    }

    public function onButtonWasPushed($slot)
    {
        $this->onCommand[$slot]->execute();
    }

    public function offButtonWasPushed($slot)
    {
        $this->offCommand[$slot]->execute();
    }

    public function __toString()
    {
        $str = "\n---Remote Control---\n";
        for ($i=0; $i<=4; $i++) {
            $str .= "\nSlot[$i]" . $this->onCommand[$i]->getName() . " <===> " . $this->offCommand[$i]->getName();
        }
        return $str;
    }
}
