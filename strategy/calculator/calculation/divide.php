<?php
namespace strategy\calculator\calculation;

class divide implements calculationRule
{
    public function calculate($a, $b)
    {
        return ($a/$b);
    }
}