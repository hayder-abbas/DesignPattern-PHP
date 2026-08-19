<?php

namespace src;

interface Command {

    public function execute(): void;

    public function undo(): void;
}
