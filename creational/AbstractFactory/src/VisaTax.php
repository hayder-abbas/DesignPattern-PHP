<?php

namespace src;

use src\Tax;

class VisaTax implements Tax {

    #[\Override]
    public function preparTax() {
        return "Visa tax paying successfuly...\n";
    }
}
