<?php

require_once "vendor/autoload.php";

/**
 * Iterator Pattern
 * ---------------------------
 * Lets you step through the elements of a collection one at a time
 * without exposing how that collection is stored internally (array,
 * database result set, linked list, etc). PHP has this pattern built
 * into the language via the Iterator interface — implement it, and
 * your object can be used directly in a foreach loop.
 */

$playlist = new src\Playlist();
$playlist->addSong("Bohemian Rhapsody - Queen");
$playlist->addSong("Hotel California - Eagles");
$playlist->addSong("Imagine - John Lennon");
$playlist->addSong("Stairway to Heaven - Led Zeppelin");

$iterator = $playlist->createIterator();

echo "Playing songs sequentially:\n";
while ($iterator->hasNext()) {
    echo "- " . $iterator->next() . "\n";
}

echo "\nRewinding and playing first song:\n";
$iterator->rewind();
echo "First song: " . $iterator->current() . "\n";
