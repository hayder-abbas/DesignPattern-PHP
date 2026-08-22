<?php

namespace src;

interface Observer
{
    public function update(Subject $subject): void;
}
