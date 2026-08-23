<?php

namespace src;

interface OrderState
{
    public function next(Order $order): void;
    public function cancel(Order $order): void;
    public function getName(): string;
}
