<?php

namespace src;

class OrderConfirmation extends Notification
{
    public function __construct(MessageSender $sender, private string $orderId)
    {
        parent::__construct($sender);
    }

    public function notify(string $to): void
    {
        $this->sender->send($to, "Your order #{$this->orderId} is confirmed!");
    }
}
