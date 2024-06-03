<?php

namespace ClassLib\Singleton;

class Authenticator {
    private static $instance;
    private $isLoggedIn = false;

    private function __construct() {}

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function isLoggedIn() {
        return $this->isLoggedIn;
    }

    public function login() {
        $this->isLoggedIn = true;
    }

    public function logout() {
        $this->isLoggedIn = false;
    }
}
