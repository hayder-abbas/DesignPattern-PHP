<?php

namespace src;

use src\User;

class ChatRoom implements ChatMediator
{
    private array $users = [];

    public function sendMessage(string $message, User $sender): void
    {
        foreach ($this->users as $user) {
            // Don't echo the message back to whoever sent it
            if ($user !== $sender) {
                $user->receive($message, $sender);
            }
        }
    }

    public function addUser(User $user): void
    {
        $this->users[] = $user;
    }
}
