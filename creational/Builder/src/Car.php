<?php

namespace src;

class Car {

    public string $model;
    public string $engine;
    public int $wheels;
    public string $color;
    public bool $hasSunroof;
    public bool $hasGPS;

    public function __toString(): string {
        return sprintf(
                "%s Car = [engine=%s, wheels=%d, color=%s, sunroof=%s, gps=%s]\n",
                $this->model,
                $this->engine,
                $this->wheels,
                $this->color,
                $this->hasSunroof ? 'yes' : 'no',
                $this->hasGPS ? 'yes' : 'no'
        );
    }
}
