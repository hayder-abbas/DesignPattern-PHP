<?php

namespace src;

class ShippingCalculator implements Visitor
{
    public function visitBook(Book $book): float
    {
        return $book->isImported ? 5.0 : 2.0;
    }

    public function visitElectronics(Electronics $electronics): float
    {
        return $electronics->isFragile ? 15.0 : 8.0;
    }
}
