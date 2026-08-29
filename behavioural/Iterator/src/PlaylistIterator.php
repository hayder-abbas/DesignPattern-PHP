<?php

namespace src;

class PlaylistIterator implements CustomIterator
{
    private Playlist $playlist;
    private int $position = 0;

    public function __construct(Playlist $playlist)
    {
        $this->playlist = $playlist;
    }

    public function hasNext(): bool
    {
        return $this->position < count($this->playlist->getSongs());
    }

    public function next(): ?string
    {
        if ($this->hasNext()) {
            $song = $this->playlist->getSongs()[$this->position];
            $this->position++;
            return $song;
        }
        return null;
    }

    public function current(): ?string
    {
        if ($this->position < count($this->playlist->getSongs())) {
            return $this->playlist->getSongs()[$this->position];
        }
        return null;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }
}
