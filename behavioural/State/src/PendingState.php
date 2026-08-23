<?php

namespace src;

class PendingState implements OrderState
{
    public function next(Order $order): void
    {
        echo "Order confirmed, now preparing.\n";
        $order->setState(new PreparingState());
    }

    public function cancel(Order $order): void
    {
        echo "Order cancelled.\n";
        $order->setState(new CancelledState());
    }

    public function getName(): string
    {
        return "Pending";
    }
}
