<?php

class Car {

    public string $maker;
    
    public function __construct()
    {
        $this->maker = "Fiat";
    }

    public function setMaker(string $maker) {
        $this->maker = $maker;
    }

    public function getMaker() {
        return $this->maker;
    }
}