<?php
namespace strategy\paymentSystem;

use strategy\paymentSystem\paymentdriver\PayByCreditCard;
use strategy\paymentSystem\paymentdriver\PayByPaypal;
use strategy\paymentSystem\CustomerInfo;

class ShoppingCart
{
    const PAY_LIMIT = 500;
    private $paymentdriver = null;
    private $amount = 0;
    private $customer;

    public function __construct($amt=0)
    {
        $this->amount = $amt;
    }

    public function setCustomer(CustomerInfo $customer)
    {
        if (!empty($customer)) {
            $this->customer = $customer;
        }
        return $this;
    }

    public function setAmount($amt = 0)
    {
        if (!empty($amt)) {
            $this->amount = $amt;
        }
    }

    public function setPaymentDriver($amt=0)
    {
        if (empty($this->amount) && $amt != 0) {
            $this->setAmount($amt);
        }

        if ($this->amount < self::PAY_LIMIT) {
            $this->paymentdriver = new PayByPaypal($this->customer);
        } else {
            $this->paymentdriver = new PayByCreditCard($this->customer);
        }

        return $this;
    }

    public function pay($amt = 0)
    {
        if (empty($this->paymentdriver)) {
            $this->setPaymentDriver($amt);
        }

        $this->paymentdriver->pay($this->amount);

        return $this;
    }
}