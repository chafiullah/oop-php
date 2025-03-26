<?php
declare(strict_types=1);
namespace payment_system;
interface PaymentMethod
{
    const bool APPROVED = true;
    const bool REJECTED = false;
    public function processPayment(float $amount):bool;
}
