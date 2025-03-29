<?php
declare(strict_types=1);
namespace design_patterns\strategy_pattern;

interface DiscountStrategy
{
    public function calculateDiscount(float $price): float;
}