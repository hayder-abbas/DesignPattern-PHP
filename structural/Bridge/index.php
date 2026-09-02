<?php

require_once "vendor/autoload.php";

use src\OrderConfirmation;
use src\EmailSender;
use src\PasswordReset;
use src\SmsSender;

/**
 * Bridge Pattern
 * -------------------------
 * Splits what would be one class hierarchy into two separate ones —
 * an "abstraction" and an "implementation" — connected by composition
 * instead of inheritance. This avoids a combinatorial explosion of
 * subclasses when something varies along two independent dimensions
 * (here: notification TYPE × delivery CHANNEL).
 */

// Any Notification can pair with any MessageSender — 2 small
// hierarchies mixed freely, instead of one class per combination
$orderByEmail = new OrderConfirmation(new EmailSender(), "ORD-1001");
$orderByEmail->notify("haruki@example.com");

$resetBySms = new PasswordReset(new SmsSender(), "https://app.test/reset");
$resetBySms->notify("+9647xxxxxxxx");

$orderBySms = new OrderConfirmation(new SmsSender(), "ORD-1002");
$orderBySms->notify("+9647xxxxxxxx");
