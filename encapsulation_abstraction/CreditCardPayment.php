<?php

namespace encapsulation_abstraction;
include_once(__DIR__.'/PaymentMethod.php');
include_once(__DIR__.'/PaymentProcessor.php');
use encapsulation_abstraction\PaymentMethod;
use encapsulation_abstraction\PaymentProcessor;
class CreditCardPayment extends PaymentProcessor implements PaymentMethod
{

    public function processPayment(float $amount): bool
    {
        sleep(5);
        $validated = $this->validatePayment($amount);
        if ($validated) {
            $this->logTransaction($amount);
            return PaymentMethod::APPROVED;
        }
        echo "The following payment of \${$amount} has been rejected...\n";
        return PaymentMethod::REJECTED;
    }

    public function validatePayment(float $amount): bool
    {
        return $amount > 10 ? PaymentMethod::APPROVED : PaymentMethod::REJECTED;
    }
}