<?php

namespace src;

interface CustomIterator
{
    public function hasNext(): bool;
    public function next(): ?string;
    public function current(): ?string;
    public function rewind(): void;
}
