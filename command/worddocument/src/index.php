<?php
/**
 * Command design pattern is used to encapsulate a request as an object[Command]
 * and pass to an invoker, wherein the invoker does not knows how to server the request
 * but uses the encapsulated command to perform an action.
 */
function __autoload($class)
{
    $fileName =  __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    include ($fileName);
}

/*RECEIVER*/
$receiverWord = new \Receiver\WordDocument();

/*COMMAND*/
$openWord = new \Command\OpenWordDocument($receiverWord);
$closeWord = new \Command\CloseWordDocument($receiverWord);
$saveWord = new \Command\SaveWordDocument($receiverWord);

/*INVOKER*/
$wordDoc = new \Invoker\WordMenuOption($closeWord, $openWord, $saveWord);
$wordDoc->clickOpen();
$wordDoc->clickSave();
$wordDoc->clickClose();

/* Now if we want to implement anther Invoker, lets say keyboard shortcut, then we'll be using the same Command to interact with
WordDocuments.*/