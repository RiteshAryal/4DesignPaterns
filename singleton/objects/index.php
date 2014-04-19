<?php

include_once 'Singleton.php';

$single = singleton::getInstance();
$douple = singleton::getInstance();

echo '<pre>';
print_r($single);
echo '</pre>';

echo '<pre>';
print_r($douple);
echo '</pre>';
