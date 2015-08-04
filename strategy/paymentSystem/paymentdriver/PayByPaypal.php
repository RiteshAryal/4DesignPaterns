<?php
namespace strategy\paymentSystem\paymentdriver;

use strategy\paymentSystem\CustomerInfo;

class PayByPaypal implements PaymentRule
{
    private $customer;
    public function __construct(CustomerInfo $customer)
    {
        $this->customer = $customer;
    }

    public function pay($amount=0)
    {
        echo ' -paying ' . $amount . ' by Paypal using email ' . $this->customer->getEmail() . '- ';
    }
}