<?php


require_once 'vendor/autoload.php';

use src\DB;

$con1 = DB::getInstance('MySQL');
$con2 = DB::getInstance();
$con3 = DB::getInstance();

print_r($con1->getData());
print_r($con2->getData());
print_r($con3->getData());
