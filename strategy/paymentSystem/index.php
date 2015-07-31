<?php

//namespace strategy\paymentSystem;

include_once 'ShoppingCart.php';
include_once 'CustomerInfo.php';

$cart = 1200;
$shopping = new ShoppingCart();
$shopping
    ->setCustomer( new Customer(
        'Ritesh',
        'ritesh@myemail.com',
        [
            '123-456-7890',
            '12/17',
            '345'
        ]
    ))
    ->setPaymentDriver($cart)
    ->pay()

    ->setPaymentDriver($cart-700)
    ->pay();

