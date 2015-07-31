<?php
//error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);

interface paymentstrategy
{
    public function pay($amount=0);
}