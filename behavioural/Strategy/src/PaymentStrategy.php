<?php

namespace src;

interface PaymentStrategy
{
    public function pay(float $amount): void;
}
