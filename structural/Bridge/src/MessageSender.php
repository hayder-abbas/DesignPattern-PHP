<?php

namespace src;

// The Implementor hierarchy: HOW a message actually gets sent
interface MessageSender
{
    public function send(string $to, string $message): void;
}
