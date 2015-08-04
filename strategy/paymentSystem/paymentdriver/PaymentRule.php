<?php
namespace strategy\paymentSystem\paymentdriver;

interface PaymentRule
{
    public function pay($amount=0);
}