<?php

require 'vendor/autoload.php';

$paypalBank = new src\PaypalBank();
$visaBank = new src\VisaBank();

$paypalAccount = $paypalBank->createAccount();
$visaAccount = $visaBank->createAccount();

print_r($paypalAccount);
print_r($visaAccount);
