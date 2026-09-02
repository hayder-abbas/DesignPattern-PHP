<?php

namespace src;

class SmsSender implements MessageSender
{
    public function send(string $to, string $message): void
    {
        echo "SMS to {$to}: {$message}\n";
    }
}
