<?php

namespace src;

class Coffee extends Beverage
{
    protected function brew(): void
    {
        echo "Brewing coffee grounds\n";
    }

    protected function addCondiments(): void
    {
        echo "Adding sugar and milk\n";
    }
}
