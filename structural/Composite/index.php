<?php

require_once "vendor/autoload.php";

use src\Folder;
use src\File;

/**
 * Composite Pattern
 * ----------------------------
 * Lets you treat a single object and a group of objects the same way,
 * through one shared interface. A "leaf" (a single item) and a
 * "composite" (a container that can hold leaves AND other
 * composites) both implement that interface — so client code never
 * has to check "is this one item, or a whole group of them?"
 */

$root = new Folder("Project");

$src = new Folder("src");
$src->add(new File("index.php", 12));
$src->add(new File("helpers.php", 5));

$assets = new Folder("assets");
$assets->add(new File("logo.png", 340));

$root->add($src);
$root->add($assets);
$root->add(new File("README.md", 3));

$root->display();
echo "Total size: {$root->getSize()}KB\n";
