<?php

require_once 'payment_strategy.php';

class Payment {
    private PaymentStrategy $strategy;
    
    public function __construct(PaymentStrategy $strategy) {
        $this->strategy = $strategy;
    }
    
    public function pay(float $amount) {
        $this->strategy->pay($amount);
    }
}