<?php

namespace src;

// The Adapter: implements the interface your app expects, but
// internally translates each call into what the legacy SDK actually needs
class StripeAdapter implements PaymentGateway
{
    public function __construct(private LegacyStripeSDK $stripe) {}

    public function pay(float $amountInDollars): void
    {
        $cents = (int) round($amountInDollars * 100);
        $this->stripe->chargeInCents($cents);
    }
}
