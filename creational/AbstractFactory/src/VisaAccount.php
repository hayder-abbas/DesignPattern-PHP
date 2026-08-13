<?php

namespace src;

use src\Account;

class VisaAccount implements Account {

    #[\Override]
    public function prepareAccount() {
        return "Visa account has been created successfuly\n";
    }
}
