<?php

namespace src;

class Logger implements Observer
{
    public function update(Subject $subject): void
    {
        if ($subject instanceof User) {
            echo "Logger: User {$subject->getName()} changed email to {$subject->getEmail()}\n";
        }
    }
}
