<?php
namespace Command;

class NoCommand extends ICommand
{
    public function execute()
    {
        echo "\n---No Command attached---\n";
    }

    public function getName()
    {
        return "NoCommand";
    }
}
