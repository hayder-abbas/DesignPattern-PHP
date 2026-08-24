<?php

namespace src;

class CryptoPayment implements PaymentStrategy
{
    public function __construct(private string $walletAddress) {}

    public function pay(float $amount): void
    {
        echo "Sent \${$amount} worth of crypto to wallet {$this->walletAddress}\n";
    }
}
