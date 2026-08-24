<?php

namespace src;

// The Context: doesn't know or care HOW payment actually happens,
// it just delegates to whichever strategy it's holding
class Checkout
{
    public function __construct(private PaymentStrategy $paymentStrategy) {}

    public function setPaymentStrategy(PaymentStrategy $strategy): void
    {
        $this->paymentStrategy = $strategy;
    }

    public function checkout(float $amount): void
    {
        $this->paymentStrategy->pay($amount);
    }
}
