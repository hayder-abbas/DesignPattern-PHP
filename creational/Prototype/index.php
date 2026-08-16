<?php

require 'vendor/autoload.php';

/**
 * Prototype Pattern in PHP
 * -------------------------
 * Instead of building a new object from scratch every time (which can be
 * slow or repetitive if the object needs a lot of setup), you configure
 * one "prototype" object once, then clone it whenever you need a new
 * copy. Each clone can then be tweaked independently.
 */
$template = new src\Page(
        title: 'Untitled',
        body: 'Write your content here...',
        author: new src\Author('Hayder')
);

$post1 = $template->clone();
$post1->title = 'My First Post';
$post1->author->name = 'Guest Writer'; // only changes post1's author

$post2 = $template->clone();
$post2->title = 'My Second Post';

echo $template->title . " — by " . $template->author->name . "\n";
echo $post1->title . " — by " . $post1->author->name . "\n";
echo $post2->title . " — by " . $post2->author->name . "\n";
