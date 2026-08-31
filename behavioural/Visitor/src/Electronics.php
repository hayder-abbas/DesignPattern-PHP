<?php

namespace src;

class Electronics implements CartItem
{
    public function __construct(
        public float $price,
        public bool $isFragile = true,
    ) {}

    public function accept(Visitor $visitor): float
    {
        return $visitor->visitElectronics($this);
    }
}
