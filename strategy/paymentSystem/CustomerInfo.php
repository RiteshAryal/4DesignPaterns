<?php
namespace strategy\paymentSystem;

class CustomerInfo
{
    private $name;
    private $email;
    private $bankDetail=[];

    public function __construct($name, $email, $bankDetail)
    {
        $this->name = $name;
        $this->email = $email;
        $this->bankDetail = $bankDetail;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getBankInfo()
    {
        return $this->bankDetail;
    }
}