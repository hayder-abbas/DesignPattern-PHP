<?php

namespace src;

class CreditCardPayment implements PaymentStrategy
{
    public function __construct(private string $cardNumber) {}

    public function pay(float $amount): void
    {
        $lastFour = substr($this->cardNumber, -4);
        echo "Charged \${$amount} to credit card ending in {$lastFour}\n";
    }
}
