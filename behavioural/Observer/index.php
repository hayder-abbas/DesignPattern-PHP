<?php

require_once "vendor/autoload.php";

/**
 * Observer Pattern
 * --------------------------
 * A Subject keeps a list of Observers and notifies all of them
 * whenever something happens, without needing to know what each
 * observer actually does with that information. Observers subscribe
 * on their own and react independently — the Subject just broadcasts.
 */

$user = new src\User("Alice", "alice@example.com");
$logger = new src\Logger();
$emailNotifier = new src\EmailNotifier();

$user->attach($logger);
$user->attach($emailNotifier);

// Change email – triggers notification
$user->setEmail("alice.new@example.com");

// Detach logger and change email again
$user->detach($logger);
$user->setEmail("alice@company.com");
