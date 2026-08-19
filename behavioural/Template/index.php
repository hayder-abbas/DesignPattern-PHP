<?php

require_once "vendor/autoload.php";

/**
 * Template Method Pattern in PHP
 * ---------------------------------
 * Defines the skeleton of an algorithm in a base (abstract) class, with
 * the exact order of steps fixed. Subclasses override individual steps
 * without changing that order — so the overall process stays
 * consistent, but the details differ per subclass.
 */

echo "Making tea:\n";
new src\Tea()->prepare();

echo "\nMaking coffee:\n";
new src\Coffee()->prepare();
