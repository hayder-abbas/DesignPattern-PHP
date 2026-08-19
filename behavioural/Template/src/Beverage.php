<?php

namespace src;

abstract class Beverage
{
    // The "template method": defines the fixed sequence of steps.
    // It's marked final so subclasses can't change the order —
    // they can only change what happens inside each step.
    final public function prepare(): void
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    // Steps shared by every beverage, so they live here once
    private function boilWater(): void
    {
        echo "Boiling water\n";
    }

    private function pourInCup(): void
    {
        echo "Pouring into cup\n";
    }

    // Steps that differ per beverage — each subclass must define these
    abstract protected function brew(): void;
    abstract protected function addCondiments(): void;
}
