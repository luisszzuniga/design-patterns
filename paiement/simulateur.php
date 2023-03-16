<?php

require_once 'payment_strategy.php';
require_once 'payment.php';

// Paiement PayPal
$paypal = new PayPalPayment("email@paypal.com", "password");
$payment = new Payment($paypal);
$payment->pay(100);

// Paiement carte de crédit
$creditCard = new CreditCardPayment("1234 5678 9012 3456", "12/24", "123");
$payment = new Payment($creditCard);
$payment->pay(200);