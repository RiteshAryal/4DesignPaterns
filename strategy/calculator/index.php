<?php
use strategy\calculator\calculator;
use strategy\calculator\calculation\add;
use strategy\calculator\calculation\substract;
use strategy\calculator\calculation\multiply;
use strategy\calculator\calculation\divide;

function __autoload($class)
{
    $parts = explode('\\', $class);

    if (!file_exists(end($parts) . '.php')) {
        require $parts[2] . '\\' . end($parts) . '.php';
    } else {
        require end($parts) . '.php';
    }
}

$taskAdd = new calculator(new add());
echo 'Addition of 12+14 is: ' . $taskAdd->calculate(12,14)."\n";

$taskSub = new calculator(new substract());
echo 'Substraction of 22-14 is: ' . $taskSub->calculate(22,14)."\n";

$taskMul = new calculator(new multiply());
echo 'Multiply of 12*14 is: ' . $taskMul->calculate(12,14)."\n";

$taskDiv = new calculator(new divide());
echo 'Division of 122/14 is: ' . $taskDiv->calculate(122,14)."\n";