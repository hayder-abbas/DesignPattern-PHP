<?php

namespace src;

class PayPalPayment implements PaymentStrategy
{
    public function __construct(private string $email) {}

    public function pay(float $amount): void
    {
        echo "Paid \${$amount} via PayPal account {$this->email}\n";
    }
}
