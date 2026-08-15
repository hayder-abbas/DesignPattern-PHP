<?php

namespace src;

interface CarBuilder {

    public function setEngine(string $engine): static;

    public function setWheels(int $wheels): static;

    public function setColor(string $color): static;

    public function addSunroof(): static;

    public function addGPS(): static;

    public function build(): Car;
}
