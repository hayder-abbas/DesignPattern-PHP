<?php

namespace src;

use src\Account;

class PaypalAccount implements Account {

    #[\Override]
    public function prepareAccount() {
        return "Paypal account has been created successfuly!\n";
    }
}
