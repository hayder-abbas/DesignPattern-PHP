<?php

namespace src;

class DB {
    private static ?DB $instance = null;
    private string $data;

    private function __construct(string $data) {
        $this->data = $data;
    }

    public static function getInstance(string $data = ''): DB {
        if (self::$instance === null) {
            self::$instance = new DB($data);
        }
        return self::$instance;
    }

    public function getData(): string {
        return $this->data . PHP_EOL;
    }
}
