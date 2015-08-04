<?php

use \strategy\paymentSystem\ShoppingCart;
use \strategy\paymentSystem\CustomerInfo;

function __autoload($class)
{
    $parts = explode('\\', $class);

    if (!file_exists(end($parts) . '.php')) {
        require $parts[2] . '\\' . end($parts) . '.php';
    } else {
        require end($parts) . '.php';
    }

}

$cart = 1200;
$shopping = new ShoppingCart();
$shopping
    ->setCustomer( new CustomerInfo(
        'Ritesh',
        'riteshrajaryal@hotmail.com',
        [
            '0798-0123-4560-7890',
            '12/17',
            '876'
        ]
    ))
    ->setPaymentDriver($cart)
    ->pay()

    ->setPaymentDriver($cart-700)
    ->pay();

