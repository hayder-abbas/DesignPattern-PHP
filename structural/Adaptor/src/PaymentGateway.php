<?php

namespace src;

// The interface your application expects everywhere
interface PaymentGateway
{
    public function pay(float $amountInDollars): void;
}
