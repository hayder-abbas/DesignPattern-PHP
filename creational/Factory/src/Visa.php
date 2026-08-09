<?php

namespace src;

use src\Account;

class Visa implements Account {

    public function saveData() {
        return "Visa account has been created successfuly\n";
    }
}
