<?php

namespace src;

class TurnOnCommand implements Command {

    public function __construct(private Light $light) {
        
    }

    #[\Override]
    public function execute(): void {
        $this->light->turnOn();
    }

    #[\Override]
    public function undo(): void {
        $this->light->turnOff();
    }
}
