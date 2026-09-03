<?php

namespace src;

// The Leaf: a single item, no children
class File implements FileSystemNode
{
    public function __construct(private string $name, private int $size) {}

    public function getSize(): int
    {
        return $this->size;
    }

    public function display(int $indent = 0): void
    {
        echo str_repeat("  ", $indent) . "- {$this->name} ({$this->size}KB)\n";
    }
}
