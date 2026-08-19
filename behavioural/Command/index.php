<?php

require_once 'vendor/autoload.php';

/**
 * Command Pattern in PHP
 * ------------------------
 * Wraps a request (an action + the object it acts on) inside its own
 * object. The invoker doesn't need to know HOW a command works — it
 * just calls execute(). This makes it easy to queue commands, log
 * them, or undo them, since each one carries everything it needs to
 * run itself.
 */
$light = new src\Light();
$remote = new src\RemoteControl();

$remote->press(new src\TurnOnCommand($light));
$remote->press(new src\TurnOffCommand($light));
$remote->undoLast(); // undoes the last command (the OFF), so light goes back ON
