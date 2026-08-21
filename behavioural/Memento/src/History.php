<?php

namespace src;

// The Caretaker: keeps a history of snapshots, but never inspects
// or modifies what's inside them — that stays the Editor's business
class History
{
    private array $mementos = [];

    public function push(EditorMemento $memento): void
    {
        array_push($this->mementos, $memento);
    }

    public function pop(): ?EditorMemento
    {
        return array_pop($this->mementos);
    }
}
