<?php
namespace strategy\calculator\calculation;

class multiply implements calculationRule
{
    public function calculate($a, $b)
    {
        return ($a*$b);
    }
}