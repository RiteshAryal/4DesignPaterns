<?php
namespace Command;

/**
 * The command object provides one method ie. execute(), that encapsulates the actions and
 * can be called to invoke the actions on the Receiver
 *
 * Class ICommand
 * @package Command
 */
abstract class ICommand
{
    abstract public function execute();

    public function getName()
    {
        return __CLASS__;
    }
}
