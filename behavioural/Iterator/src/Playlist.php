<?php

namespace src;

class Playlist implements Collection
{
    private array $songs = [];

    public function addSong(string $song): void
    {
        array_push($this->songs, $song);
    }

    public function getSongs(): array
    {
        return $this->songs;
    }

    public function createIterator(): CustomIterator
    {
        return new PlaylistIterator($this);
    }
}
