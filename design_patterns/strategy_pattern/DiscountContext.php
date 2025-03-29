<?php

declare(strict_types=1);
namespace design_patterns\strategy_pattern;
include_once __DIR__ . "/DiscountStrategy.php";
include_once __DIR__ . "/DiscountStrategies.php";
class DiscountContext
{
    private DiscountStrategy $discountStrategy;
    public function __construct(DiscountStrategy $discountStrategy)
    {
        $this->discountStrategy = $discountStrategy;
    }
    public function setDiscountStrategy(DiscountStrategy $discountStrategy): void
    {
        $this->discountStrategy = $discountStrategy;
    }
    public function getFinalPrice(float  $price): float
    {
        return $price - $this->discountStrategy->calculateDiscount($price);
    }
}