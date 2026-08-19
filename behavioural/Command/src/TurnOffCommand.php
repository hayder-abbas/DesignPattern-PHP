<?php

namespace src;

class TurnOffCommand implements Command {

    public function __construct(private Light $light) {
        
    }

    #[\Override]
    public function execute(): void {
        $this->light->turnOff();
    }

    #[\Override]
    public function undo(): void {
        $this->light->turnOn();
    }
}
