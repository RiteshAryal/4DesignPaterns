<?php
use Command\basicswitch\remote;

function __autoload($class)
{
    $parts = explode('\\', $class);
    require end($parts) . '.php';
}

$radioRemote = new remote();

$radioRemote
    ->command('switchOnRadio')->run()
    ->command('tuneRadio')->run()
    ->command('switchOffRadio')->run();
