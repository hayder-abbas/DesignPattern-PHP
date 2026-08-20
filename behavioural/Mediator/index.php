<?php

require_once "vendor/autoload.php";

use src\ChatRoom;
use src\User;

/**
 * Mediator Pattern in PHP
 * --------------------------
 * Instead of objects talking to each other directly (which creates a
 * tangled web of dependencies as more objects get added), they all
 * talk through one central "mediator" object. Each object only needs
 * to know about the mediator — not about every other object it might
 * need to reach.
 */

$chatRoom = new ChatRoom();

// Users only ever reference the chat room — never each other directly
$alice = new User("Alice", $chatRoom);
$bob = new User("Bob", $chatRoom);
$charlie = new User("Charlie", $chatRoom);

$alice->send("Hello everyone!");
echo "=====================\n";
$bob->send("Hey Alice!");
