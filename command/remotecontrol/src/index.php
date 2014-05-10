<?php
/**
 * The Command Pattern encapsulates a request as an object, thereby letting
 * you parameterize other objects with different requests, queue or log requests,
 * and support undoable operations.
 *
 * Eg: Remote Control Slot App
 */
function __autoload($class)
{
    $fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

$remote = new \Invoker\RemoteController();

/*All the devices ie. Receiver*/
$livingRoomLight = new \Receiver\Light();
$securityControl = new \Receiver\SecurityControl();
$sprinker = new \Receiver\Sprinkler();
$stereo = new \Receiver\Stereo();

/*On/Off for Livig Room Light*/
$livingRoomLightOn = new \Command\LightOnCommand($livingRoomLight);
$livingRoomLightOff = new \Command\LightOffCommand($livingRoomLight);
/*On/Off for Stereo*/
$stereoOnWithCDCommand = new \Command\StereoOnWithCDCommand($stereo);
$stereoOffWithCDCommand = new \Command\StereoOffWithCDCommand($stereo);

/* once all our commands are ready, we can load them into the remote slots*/
$remote->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remote->setCommand(1, $stereoOnWithCDCommand, $stereoOffWithCDCommand);

/*Now, step through each slot and push its On and Off button*/
$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);
$remote->onButtonWasPushed(1);
$remote->offButtonWasPushed(1);

echo $remote;
