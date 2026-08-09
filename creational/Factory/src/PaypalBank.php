<?php

namespace src;

use src\Bank;
use src\Account;
use src\Paypal;

class PaypalBank extends Bank {

    public function getAccount(): Account {
        return new Paypal();
    }
}
