<?php

namespace src;

// The Originator: the object whose state we want to save/restore
class Editor
{
    private string $content = "";

    public function type(string $words): void
    {
        $this->content .= $words;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    // Creates a snapshot of the current state
    public function save(): EditorMemento
    {
        return new EditorMemento($this->content);
    }

    // Restores state from a previously saved snapshot
    public function undo(EditorMemento $memento): void
    {
        $this->content = $memento->getContent();
    }
}
