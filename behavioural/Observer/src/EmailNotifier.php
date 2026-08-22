<?php

namespace src;

class EmailNotifier implements Observer
{
    public function update(Subject $subject): void
    {
        if ($subject instanceof User) {
            echo "EmailNotifier: Sending confirmation email to {$subject->getEmail()}\n";
        }
    }
}
