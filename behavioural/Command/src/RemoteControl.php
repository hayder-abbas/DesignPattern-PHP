<?php

namespace src;

// The Invoker: triggers commands without knowing their details, and
// keeps a history so it can undo the last one
class RemoteControl {

    private array $history = [];

    public function press(Command $command): void {
        $command->execute();
        $this->history[] = $command;
    }

    public function undoLast(): void {
        if (empty($this->history)) {
            echo "Nothing to undo\n";
            return;
        }

        $lastCommand = array_pop($this->history);
        $lastCommand->undo();
    }
}
