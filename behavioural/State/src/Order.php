<?php

namespace src;

// The Context: holds a reference to its current state and delegates to it
class Order
{
    private OrderState $state;

    public function __construct()
    {
        $this->state = new PendingState();
    }

    public function setState(OrderState $state): void
    {
        $this->state = $state;
    }

    public function next(): void
    {
        $this->state->next($this);
    }

    public function cancel(): void
    {
        $this->state->cancel($this);
    }

    public function getStatus(): string
    {
        return $this->state->getName();
    }
}
