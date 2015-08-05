<?php
namespace strategy\calculator\calculation;

class add implements calculationRule
{
    public function calculate($a, $b)
    {
        return ($a+$b);
    }
}