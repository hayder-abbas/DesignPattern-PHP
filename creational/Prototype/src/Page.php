<?php

namespace src;

class Page implements Prototype {

    public array $tags;

    public function __construct(
            public string $title,
            public string $body,
            public Author $author
    ) {
        $this->tags = ['draft'];
    }

    #[\Override]
    public function clone(): static {
        return clone $this;
    }

    // PHP's `clone` keyword does a SHALLOW copy by default: scalar
    // properties (strings, arrays) are copied, but object properties
    // still point to the SAME nested object as the original.
    // __clone() runs automatically right after the copy, so we use it
    // here to also clone the nested Author, giving each Page its own.
    public function __clone(): void {
        $this->author = clone $this->author;
    }
}
