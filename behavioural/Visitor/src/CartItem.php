<?php

namespace src;

interface CartItem
{
    public function accept(Visitor $visitor): float;
}
