<?php

interface PaymentStrategy {
    public function pay(float $amount);
}

class PayPalPayment implements PaymentStrategy {
    private string $email;
    private string $password;
    
    public function __construct(string $email, string $password) {
        $this->email = $email;
        $this->password = $password;
    }
    
    public function pay(float $amount) {
        // Paiement PayPal
        echo "Paiement de {$amount}€ via PayPal avec l'email {$this->email} et le mot de passe {$this->password}.\n";
    }
}

class CreditCardPayment implements PaymentStrategy {
    private string $cardNumber;
    private string $expirationDate;
    private string $cvv;
    
    public function __construct(string $cardNumber, string $expirationDate, string $cvv) {
        $this->cardNumber = $cardNumber;
        $this->expirationDate = $expirationDate;
        $this->cvv = $cvv;
    }
    
    public function pay(float $amount) {
        // Paiement carte de crédit
        echo "Paiement de {$amount}€ avec la carte {$this->cardNumber}, la date d'expiration {$this->expirationDate} et le code CVV {$this->cvv}.\n";
    }
}