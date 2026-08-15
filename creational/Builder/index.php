<?php

require 'vendor/autoload.php';

$sportCar = (new src\SportCarBuilder())
        ->setEngine('V8')
        ->setColor('Blue')
        ->addSunroof()
        ->build();

$familyCar = (new src\FamilyCarBuilder())
        ->setEngine('v6')
        ->setColor('Green')
        ->addSunroof()
        ->addGPS()
        ->build();

echo $sportCar;
echo $familyCar;
