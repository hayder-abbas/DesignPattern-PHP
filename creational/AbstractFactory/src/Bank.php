<?php

namespace src;

abstract class Bank {

    public function createAccount(): string {
        $account = $this->getAccount();
        return $account->prepareAccount();
    }

    public function payingTax() {
        $tax = $this->getTax();
        return $tax->preparTax();
    }

    public abstract function getAccount(): Account;

    public abstract function getTax(): Tax;
}
