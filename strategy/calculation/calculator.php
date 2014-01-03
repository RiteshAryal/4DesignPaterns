<?php

/**
 * simple calculation skeleton - strategy
 */

interface operation
{
    public function calculate($a, $b);
}

class add implements operation
{
    public function calculate($a, $b)
    {
        return ($a+$b);
    }
}

class substract implements operation
{
    public function calculate($a, $b)
    {
        return ($a-$b);
    }
}

class multiply implements operation
{
    public function calculate($a, $b)
    {
        return ($a*$b);
    }
}

class divide implements operation
{
    public function calculate($a, $b)
    {
        return ($a/$b);
    }
}


/**
 * Real strategic implementation
 */
class calculator
{
    private $_task;
    public function __construct(operation $op) {
        if (!$op instanceof operation) {
            throw new Exception("Not valid task");
        }
        $this->_task = $op;
    }

    public function calculate($a, $b)
    {
        return $this->_task->calculate($a, $b);
    }
}

/*
 * Call specific functionality at run time ie. strategic concept
 */
$taskAdd = new calculator(new add());
echo 'Addition is: ' . $taskAdd->calculate(12,14)."\n";

$taskSub = new calculator(new substract());
echo 'Substraction is: ' . $taskSub->calculate(22,14)."\n";

$taskMul = new calculator(new multiply());
echo 'Multiply is: ' . $taskMul->calculate(12,14)."\n";

$taskDiv = new calculator(new divide());
echo 'Division is: ' . $taskDiv->calculate(122,14)."\n";