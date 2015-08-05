<?php
namespace strategy\paymentSystem\paymentdriver;

use strategy\paymentSystem\CustomerInfo;

class PayByCreditCard implements PaymentRule
{
    private $customer;
    public function __construct(CustomerInfo $customer)
    {
        $this->customer = $customer;
    }

    public function pay($amount=0)
    {
        echo "\n" . 'Paying ' . $amount . ' using Credit Card by ' . $this->customer->getName() . ' using crediential ' . implode(', ', $this->customer->getBankInfo())  .  "\n";
    }
}