<?php
namespace adapter\paymentSystem;

class paypal
{
    public function __construct()
    {

    }

    public function sendPayment($amt=0)
    {
        echo "\nPaying GBP " . $amt . " via Paypal";
    }
}
