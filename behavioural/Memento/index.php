<?php

require_once "vendor/autoload.php";

/**
 * Memento Pattern
 * -------------------------
 * Lets you capture an object's internal state and save it externally,
 * so it can be restored later — without exposing that object's
 * internals to whatever is doing the saving. The Originator creates
 * and restores from Mementos; the Caretaker just holds onto them
 * without ever looking inside.
 */

$editor = new src\Editor();
$history = new src\History();

$editor->type("Hello");
$history->push($editor->save()); // snapshot: "Hello"

$editor->type(", world");
$history->push($editor->save()); // snapshot: "Hello, world"

$editor->type("!!!");
echo "Current: {$editor->getContent()}\n";

// Undo twice, one snapshot at a time
$editor->undo($history->pop());
echo "After 1 undo: {$editor->getContent()}\n";

$editor->undo($history->pop());
echo "After 2 undos: {$editor->getContent()}\n";
