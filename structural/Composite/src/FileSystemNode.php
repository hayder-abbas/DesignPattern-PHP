<?php

namespace src;

interface FileSystemNode
{
    public function getSize(): int;
    public function display(int $indent = 0): void;
}
