<?php

/*Auto load class singleton (and any other on the same location*/
function __autoload($class)  {
    $fileName =  __DIR__ . '/' . $class . '.php';
    include $fileName;
}

$single = singleton::getInstance();
$douple = singleton::getInstance();

echo '<pre>'; print_r($single); echo '</pre>';


echo '<pre>'; print_r($douple); echo '</pre>';