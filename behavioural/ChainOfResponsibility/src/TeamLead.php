<?php

namespace src;

class TeamLead extends BaseApprover {

    #[\Override]
    public function handle(float $amount): string {
        if ($amount <= 1000) {
            return "TeamLead approved \${$amount}.";
        }

        return parent::handle($amount);
    }
}
