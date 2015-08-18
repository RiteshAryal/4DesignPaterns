<?php
namespace adapter\paymentSystem;

/**
 * This class works like a gate to talk to any API drivers whose endpoint prone to change frequently.
 * ie. single point to talk to.
 *
 * Class paypalAdapter
 * @package adapter\paymentSystem
 */
class paypalAdapter
{
    private $paypal=null;

    public function __construct($paypal=null)
    {
        $this->paypal = $paypal;
    }

    public function pay($amt=0)
    {
        $this->paypal->sendPayment($amt);
    }
}
