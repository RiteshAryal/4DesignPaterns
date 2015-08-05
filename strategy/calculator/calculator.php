<?php
namespace strategy\calculator;

use strategy\calculator\calculation\calculationRule;

class calculator
{
    private $_task;
    public function __construct(calculationRule $op) {
        if (!$op instanceof calculationRule) {
            throw new \Exception("Not valid task");
        }
        $this->_task = $op;
    }

    public function calculate($a, $b)
    {
        return $this->_task->calculate($a, $b);
    }
}
