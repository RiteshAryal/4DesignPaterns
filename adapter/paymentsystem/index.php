<?php
/**
 * Structural Design Pattern:
 * Wiki: the Adapter pattern is a software design pattern that allows the interface of an existing class
 * to be used from another interface. It is often used to make existing classes work with
 * others without modifying their source code.
 *
 * it can be used when your code is dependent on some external API or any other class that is
 * prone to change frequently.
 *
 */
use \adapter\paymentSystem\paypal;
use \adapter\paymentSystem\paypalAdapter;

function __autoload($class)
{
    $parts = explode('\\', $class);

    require end($parts) . '.php';
}

$paypal = new paypal();

$paypalAdapter = new paypalAdapter($paypal);
$paypalAdapter->pay(100);

