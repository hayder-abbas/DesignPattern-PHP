<?php

namespace src;

class Tea extends Beverage
{
    protected function brew(): void
    {
        echo "Steeping the tea\n";
    }

    protected function addCondiments(): void
    {
        echo "Adding lemon\n";
    }
}
