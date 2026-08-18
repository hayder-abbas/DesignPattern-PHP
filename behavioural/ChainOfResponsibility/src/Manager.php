<?php

namespace src;

class Manager extends BaseApprover {

    #[\Override]
    public function handle(float $amount): string {
        if ($amount <= 5000) {
            return "Manager approved \${$amount}.";
        }

        return parent::handle($amount);
    }
}
