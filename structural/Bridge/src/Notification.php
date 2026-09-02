<?php

namespace src;

// The Abstraction hierarchy: WHAT kind of notification this is.
// It HOLDS a MessageSender rather than extending one — that
// composition link is the actual "bridge" the pattern is named for.
abstract class Notification
{
    public function __construct(protected MessageSender $sender) {}

    abstract public function notify(string $to): void;
}
