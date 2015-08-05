<?php
namespace strategy\calculator\calculation;

class substract implements calculationRule
{
    public function calculate($a, $b)
    {
        return ($a-$b);
    }
}
