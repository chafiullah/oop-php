<?php
declare(strict_types=1);
namespace encapsulation_abstraction;
interface PaymentMethod
{
    const bool APPROVED = true;
    const bool REJECTED = false;
    public function processPayment(float $amount):bool;
}
