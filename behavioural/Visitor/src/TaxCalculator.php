<?php

namespace src;

class TaxCalculator implements Visitor
{
    public function visitBook(Book $book): float
    {
        return 0.0;
    }

    public function visitElectronics(Electronics $electronics): float
    {
        return $electronics->price * 0.08;
    }
}
