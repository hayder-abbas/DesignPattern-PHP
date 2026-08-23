<?php

require_once "vendor/autoload.php";

/**
 * State Pattern
 * -----------------------
 * Lets an object change its behavior when its internal state changes,
 * as if it switched to a different class. Instead of one giant
 * if/switch checking "what state am I in, so what's allowed?"
 * scattered everywhere, each state is its own object that knows what
 * can happen next — and what can't.
 */

$order = new src\Order();
echo "Status: {$order->getStatus()}\n";

$order->next(); // Pending -> Preparing
echo "Status: {$order->getStatus()}\n";

$order->cancel(); // allowed while preparing
echo "Status: {$order->getStatus()}\n";

$order->next(); // blocked, the order is already cancelled
