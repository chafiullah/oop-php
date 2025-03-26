<?php
declare(strict_types=1);
namespace payment_system;
abstract class PaymentProcessor {
    abstract public function validatePayment(float $amount):bool;
    public function logTransaction(float $amount):void
    {
        echo "A transaction of \${$amount} has been performed and approved...\n";
    }
}
