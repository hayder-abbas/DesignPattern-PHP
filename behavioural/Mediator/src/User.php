<?php

namespace src;

class User
{
    public function __construct(
        private string $name,
        private ChatMediator $mediator,
    ) {
        $this->mediator->addUser($this);
    }

    public function send(string $message): void
    {
        echo "{$this->name} sends: {$message}\n";
        $this->mediator->sendMessage($message, $this);
    }

    public function receive(string $message, User $sender): void
    {
        echo "{$this->name} receives from {$sender->name}: {$message}\n";
    }
}
