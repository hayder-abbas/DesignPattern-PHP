<?php

namespace src;

class FamilyCarBuilder implements CarBuilder {

    private Car $car;

    public function __construct() {
        $this->car = new Car();
        $this->car->model = 'Family';
        // sensible defaults
        $this->car->wheels = 6;
        $this->car->hasSunroof = false;
        $this->car->hasGPS = false;
    }

    #[\Override]
    public function setEngine(string $engine): static {
        $this->car->engine = $engine;
        return $this;
    }

    #[\Override]
    public function setWheels(int $wheels): static {
        $this->car->wheels = $wheels;
        return $this;
    }

    #[\Override]
    public function setColor(string $color): static {
        $this->car->color = $color;
        return $this;
    }

    #[\Override]
    public function addSunroof(): static {
        $this->car->hasSunroof = true;
        return $this;
    }

    #[\Override]
    public function addGPS(): static {
        $this->car->hasGPS = true;
        return $this;
    }

    #[\Override]
    public function build(): Car {
        return $this->car;
    }
}
