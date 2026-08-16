<?php

namespace src;

interface Prototype {

    public function clone(): static;
}
