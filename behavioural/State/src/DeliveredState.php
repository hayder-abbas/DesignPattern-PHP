<?php

namespace src;

class DeliveredState implements OrderState
{
    public function next(Order $order): void
    {
        echo "Order is already delivered — nothing left to do.\n";
    }

    public function cancel(Order $order): void
    {
        echo "Can't cancel — the order was already delivered.\n";
    }

    public function getName(): string
    {
        return "Delivered";
    }
}
