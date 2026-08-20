<?php

namespace src;

use src\User;

interface ChatMediator
{
    public function sendMessage(string $message, User $sender): void;
    public function addUser(User $user): void;
}
