<?php

namespace src;

use src\Bank;
use src\PaypalAccount;
use src\PaypalTax;

class PaypalBank extends Bank {

    #[\Override]
    public function getAccount(): Account {
        return new PaypalAccount();
    }

    #[\Override]
    public function getTax(): Tax {
        return new PaypalTax();
    }
}
