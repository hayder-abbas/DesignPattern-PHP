<?php

namespace src;

interface Collection
{
    public function createIterator(): CustomIterator;
}
