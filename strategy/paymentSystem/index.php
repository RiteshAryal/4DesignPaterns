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

$shoppingCC = new ShoppingCart();
$shoppingCC
    ->setCustomer( new CustomerInfo(
        'Ritesh',
        '',
        [
            '0798-0123-4560-7890',
            '12/17',
            '876'
        ]
    ))
    ->setPaymentDriver(1245)
    ->pay();

$shoppingPP = new ShoppingCart();
$shoppingPP
    ->setCustomer( new CustomerInfo(
        'Ritesh',
        'riteshrajaryal@hotmail.com',
        []
    ))
    ->setPaymentDriver(200)
    ->pay();