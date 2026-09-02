<?php

namespace src;

class PasswordReset extends Notification
{
    public function __construct(
        MessageSender $sender,
        private string $resetLink,
    ) {
        parent::__construct($sender);
    }

    public function notify(string $to): void
    {
        $this->sender->send(
            $to,
            "Reset your password here: {$this->resetLink}",
        );
    }
}
