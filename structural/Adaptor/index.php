<?php

require_once "vendor/autoload.php";

/**
 * Adapter Pattern
 * --------------------------
 * Converts the interface of one class into an interface your code
 * already expects, so two things that weren't designed to work
 * together can work together — without changing either one. Usually
 * shows up when integrating a third-party or legacy class whose
 * method names/signatures don't match what the rest of your app uses.
 */

// The rest of the app only ever talks to PaymentGateway — it has no
// idea a legacy SDK with a totally different interface sits behind it
function checkout(src\PaymentGateway $gateway, float $amount): void
{
    $gateway->pay($amount);
}

$gateway = new src\StripeAdapter(new src\LegacyStripeSDK());
checkout($gateway, 49.99);
