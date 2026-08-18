<?php

namespace src;

interface Approver {

    public function setNext(Approver $next): Approver;

    public function handle(float $amount): string;
}
