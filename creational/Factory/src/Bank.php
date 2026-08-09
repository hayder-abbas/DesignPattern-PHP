<?php

namespace src;

abstract class Bank {

    public function createAccount(): string {
        $account = $this->getAccount();
        return $account->saveData();
    }

    public abstract function getAccount(): Account;
}
