<?php

namespace src;

use src\Bank;
use src\Account;
use src\Visa;

class VisaBank extends Bank {

    public function getAccount(): Account {
        return new Visa();
    }
}
