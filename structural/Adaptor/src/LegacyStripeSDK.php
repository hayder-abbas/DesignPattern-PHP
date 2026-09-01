<?php

namespace src;

// A third-party SDK you don't control — its interface doesn't match
// yours, and you can't edit its source to make it match
class LegacyStripeSDK
{
    public function chargeInCents(int $amountInCents): void
    {
        echo "Charged {$amountInCents} cents via legacy Stripe SDK\n";
    }
}
