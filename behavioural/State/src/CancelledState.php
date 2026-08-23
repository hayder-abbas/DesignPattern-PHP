<?php

namespace src;

class CancelledState implements OrderState
{
    public function next(Order $order): void
    {
        echo "Can't proceed — the order was cancelled.\n";
    }

    public function cancel(Order $order): void
    {
        echo "Already cancelled.\n";
    }

    public function getName(): string
    {
        return "Cancelled";
    }
}
