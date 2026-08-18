<?php

namespace src;

abstract class BaseApprover implements Approver {

    private ?Approver $next = null;

    #[\Override]
    public function setNext(Approver $next): Approver {
        $this->next = $next;
        return $next; // lets us chain: $a->setNext($b)->setNext($c)
    }

    // Default behaviour: pass along, or stop if there's nowhere left to go.
    // Concrete handlers override handle() and call parent::handle()
    // when THEY can't deal with the request themselves.
    #[\Override]
    public function handle(float $amount): string {
        if ($this->next !== null) {
            return $this->next->handle($amount);
        }

        return "No one could approve \${$amount}.";
    }
}
