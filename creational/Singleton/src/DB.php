<?php

namespace src;

class DB {

    private static ?DB $db = null;

    private function __construct() {}

    public static function getInstance(): ?DB {        
        if(self::$db === null) {
            self::$db = new DB();
        }
        return self::$db;
    }

}
