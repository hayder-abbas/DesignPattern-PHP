<?php

namespace src;

class EmailSender implements MessageSender
{
    public function send(string $to, string $message): void
    {
        echo "Email to {$to}: {$message}\n";
    }
}
