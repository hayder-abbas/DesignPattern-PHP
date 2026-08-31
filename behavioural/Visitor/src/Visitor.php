<?php

namespace src;

interface Visitor
{
    public function visitBook(Book $book): float;
    public function visitElectronics(Electronics $electronics): float;
}
