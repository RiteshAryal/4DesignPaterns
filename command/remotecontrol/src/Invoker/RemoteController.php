<?php
namespace Invoker;

use \Command\NoCommand;
use \Command\ICommand;

class RemoteController
{
    /*the remote is going to handle 5 On and Off commands (as shown on constructor)
    , which will be hold in corresponding arrays*/
    private $onCommand = [];
    private $offCommand = [];

    /**
     * Lets assume that the remote control has 5 slots
     */
    public function __construct()
    {
        /*instantiate & initialize the on and off arrays*/
        $noCommand = new NoCommand();
        for ($i=0; $i<=4; $i++) {
            $this->onCommand[$i] = $noCommand;
            $this->offCommand[$i] = $noCommand;
        }
    }

    /**
     * This function takes a slot position and on On and Off command to be stored
     * in that slot. It puts these commands in the on and off arrays for later use.
     *
     * @param $slot
     * @param ICommand $onCommand
     * @param ICommand $offCommand
     */
    public function setCommand($slot, ICommand $onCommand, ICommand $offCommand)
    {
        $this->onCommand[$slot] = $onCommand;
        $this->offCommand[$slot] = $offCommand;
    }

    /*When an On or Off button is pressed, the hardware takes care of calling the
    corresponding methods onButtonWasPushed() or offButtonWasPushed()*/


    /**
     * @param $slot
     */
    public function onButtonWasPushed($slot)
    {
        $this->onCommand[$slot]->execute();
    }

    /**
     * @param $slot
     */
    public function offButtonWasPushed($slot)
    {
        $this->offCommand[$slot]->execute();
    }

    /**
     * to print out each slot and its corresponding command.
     *
     * @return string
     */
    public function __toString()
    {
        $str = "\n---Remote Control---\n";
        for ($i=0; $i<=4; $i++) {
            $str .= "\nSlot[$i]" . $this->onCommand[$i]->getName() . " <===> " . $this->offCommand[$i]->getName();
        }
        return $str;
    }
}
