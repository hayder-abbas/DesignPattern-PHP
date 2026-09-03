<?php

namespace src;

// The Composite: a container that can hold Files AND other Folders,
// and implements the SAME interface as File
class Folder implements FileSystemNode
{
    /** @var FileSystemNode[] **/
    private array $children = [];

    public function __construct(private string $name) {}

    public function add(FileSystemNode $node): void
    {
        $this->children[] = $node;
    }

    // A folder's size is just the sum of whatever it contains — it
    // never checks whether a child is a File or another Folder
    public function getSize(): int
    {
        $total = 0;
        foreach ($this->children as $child) {
            $total += $child->getSize();
        }
        return $total;
    }

    public function display(int $indent = 0): void
    {
        echo str_repeat("  ", $indent) . "+ {$this->name}/\n";
        foreach ($this->children as $child) {
            $child->display($indent + 1);
        }
    }
}
