<?php

namespace src;

use src\Bank;
use src\VisaAccount;
use src\VisaTax;

class VisaBank extends Bank {

    #[\Override]
    public function getAccount(): Account {
        return new VisaAccount();
    }

    #[\Override]
    public function getTax(): Tax {
        return new VisaTax();
    }
}
