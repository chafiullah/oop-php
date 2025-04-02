<?php
declare(strict_types=1);
namespace  design_patterns\dependency_injection;

interface  PaymentGatewayInterface
{
    public function processPayment(float $amount): bool;
}
