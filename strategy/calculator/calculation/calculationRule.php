<?php
namespace strategy\calculator\calculation;

interface calculationRule
{
    public function calculate($a, $b);
}