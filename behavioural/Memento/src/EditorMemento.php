<?php

namespace src;

// The Memento: an immutable snapshot of the Editor's state
final class EditorMemento
{
    public function __construct(private readonly string $content) {}

    public function getContent(): string
    {
        return $this->content;
    }
}
