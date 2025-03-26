<?php
declare(strict_types=1);
namespace encapsulation_abstraction;
abstract class PaymentProcessor {
    abstract public function validatePayment(float $amount):bool;
    public function logTransaction(float $amount):void
    {
        echo "A transaction of \${$amount} has been performed and approved...\n";
    }
}
