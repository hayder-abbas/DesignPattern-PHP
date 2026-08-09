<?php

namespace src;

use src\Account;

class Paypal implements Account {

    public function saveData() {
        return "Paypal account has been created successfuly!\n";
    }
}
