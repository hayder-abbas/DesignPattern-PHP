<?php

require_once "vendor/autoload.php";

/**
 * Visitor Pattern
 * --------------------------
 * Lets you add new operations to a set of classes without modifying
 * those classes. Each Element "accepts" a Visitor and hands itself
 * back to it (accept($this)); the Visitor then runs its own
 * type-specific method for that Element. Need a new operation later?
 * Write a new Visitor — the Element classes never change.
 */

$cart = [
    new src\Book(price: 20.0, isImported: true),
    new src\Electronics(price: 500.0),
];

$taxCalculator = new src\TaxCalculator();
$shippingCalculator = new src\ShippingCalculator();

foreach ($cart as $item) {
    $tax = $item->accept($taxCalculator);

    $shipping = $item->accept($shippingCalculator);

    echo sprintf("Tax: \$%.2f, Shipping: \$%.2f\n", $tax, $shipping);
}
