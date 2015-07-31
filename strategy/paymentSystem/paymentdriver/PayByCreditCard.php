<?php

require_once 'PaymentRule.php';

class PayByCreditCard implements paymentstrategy
{
    private $customer;
    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    public function pay($amount=0)
    {
        echo 'paying ' . $amount . ' using Credit Card by ' . $this->customer->getName() . ' using crediential ' . implode(', ', $this->customer->getBankInfo());
    }
}