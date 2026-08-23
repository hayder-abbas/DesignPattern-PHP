<?php

namespace src;

class ReadyState implements OrderState
{
    public function next(Order $order): void
    {
        echo "Order delivered.\n";
        $order->setState(new DeliveredState());
    }

    public function cancel(Order $order): void
    {
        // Once food is ready, it's too late to cancel
        echo "Can't cancel — the order is already ready.\n";
    }

    public function getName(): string
    {
        return "Ready";
    }
}
