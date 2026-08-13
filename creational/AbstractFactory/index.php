<?php

require 'vendor/autoload.php';

$paypal = new src\PaypalBank();
print_r($paypal->createAccount());
print_r($paypal->payingTax());

$visa = new src\VisaBank();
print_r($visa->createAccount());
print_r($visa->payingTax());
