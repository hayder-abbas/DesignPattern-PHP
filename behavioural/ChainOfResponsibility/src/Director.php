<?php

namespace src;

class Director extends BaseApprover {

    #[\Override]
    public function handle(float $amount): string {
        if ($amount <= 20000) {
            return "Director approved \${$amount}.";
        }

        return parent::handle($amount);
    }
}
