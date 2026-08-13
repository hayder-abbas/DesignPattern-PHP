<?php

namespace src;

use src\Tax;

class PaypalTax implements Tax {

    #[\Override]
    public function preparTax() {
        return "Paypal tax paying successfuly...\n";
    }
}
