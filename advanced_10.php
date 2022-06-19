<?php

interface PaySystem
{
    public function pay();
}

class Paypal implements PaySystem
{
    public function pay()
    {
        // TODO: Implement setPay() method.
    }
}

class GooglePay implements PaySystem
{
    public function pay()
    {
        // TODO: Implement setPay() method.
    }
}

abstract class Payment
{
    public abstract function getPaySystem(): PaySystem;

    public function setPayment()
    {
        $system = $this->getPaySystem();
        $system->pay();
    }
}

class PaypalPayment extends Payment
{
    public function getPaySystem(): PaySystem
    {
        return new Paypal();
    }
}

class GooglePayPayment extends Payment
{
    public function getPaySystem(): PaySystem
    {
        return new GooglePay();
    }
}


function clientCode(Payment $payment)
{
    $payment->setPayment();
}
