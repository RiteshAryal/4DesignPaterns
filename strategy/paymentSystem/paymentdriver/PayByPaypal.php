<?php

require_once 'PaymentRule.php';
require_once 'CustomerInfo.php';

class PayByPaypal implements paymentstrategy
{
    private $customer;
    public function __construct($customer)
    {
        $this->customer = $customer;
    }

    public function pay($amount=0)
    {
        echo '<br/>paying ' . $amount . ' by Paypal using email ' . $this->customer->getEmail();
    }
}