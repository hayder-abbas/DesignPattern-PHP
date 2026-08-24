<?php

require_once "vendor/autoload.php";

/**
 * Strategy Pattern
 * --------------------------
 * Defines a family of interchangeable algorithms, each wrapped in its
 * own class behind a shared interface, and lets the client swap
 * between them at runtime. Instead of one method full of
 * "if paymentType === 'credit_card' ... elseif ...", each algorithm
 * becomes its own object.
 */

$checkout = new src\Checkout(new src\CreditCardPayment("4111111111111111"));
$checkout->checkout(49.99);

// Same Checkout object, swap the strategy, behavior changes completely
$checkout->setPaymentStrategy(new src\PayPalPayment("haruki@example.com"));
$checkout->checkout(19.99);

$checkout->setPaymentStrategy(new src\CryptoPayment("0xA1b2C3..."));
$checkout->checkout(99.99);
