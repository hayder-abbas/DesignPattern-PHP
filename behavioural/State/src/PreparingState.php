<?php

namespace src;

class PreparingState implements OrderState
{
    public function next(Order $order): void
    {
        echo "Order is ready for pickup.\n";
        $order->setState(new ReadyState());
    }

    public function cancel(Order $order): void
    {
        echo "Order cancelled.\n";
        $order->setState(new CancelledState());
    }

    public function getName(): string
    {
        return "Preparing";
    }
}
