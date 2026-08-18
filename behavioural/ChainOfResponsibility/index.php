<?php

require_once 'vendor/autoload.php';
/**
 * Chain of Responsibility Pattern in PHP
 * ----------------------------------------
 * A request travels along a chain of handlers. Each handler decides
 * whether it can deal with the request itself, or passes it on to the
 * next handler in the chain. The sender doesn't need to know which
 * handler ends up processing it — very similar in spirit to how
 * Laravel middleware passes a request down a pipeline.
 */
$teamLead = new src\TeamLead();
$manager = new src\Manager();
$director = new src\Director();

// Build the chain: TeamLead -> Manager -> Director
$teamLead->setNext($manager)->setNext($director);

// The caller only ever talks to $teamLead — it doesn't know or care
// who actually ends up approving the request.
echo $teamLead->handle(500) . PHP_EOL;
echo $teamLead->handle(3000) . PHP_EOL;
echo $teamLead->handle(15000) . PHP_EOL;
echo $teamLead->handle(50000) . PHP_EOL;
