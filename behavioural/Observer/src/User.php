<?php

namespace src;

use src\Observer;

class User implements Subject
{
    /** @var Observer[] */
    private array $observers = [];

    public function __construct(private string $name, private string $email) {}

    public function attach(Observer $observer): void
    {
        array_push($this->observers, $observer);
    }

    public function detach(Observer $observer): void
    {
        $this->observers = array_filter(
            $this->observers,
            fn(Observer $obs) => $obs !== $observer,
        );
    }

    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $newEmail): void
    {
        if ($this->email !== $newEmail) {
            $this->email = $newEmail;
            $this->notify();
        }
    }
}
