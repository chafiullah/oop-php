<?php
declare(strict_types=1);

namespace design_patterns\strategy_pattern;

include_once __DIR__ . "/DiscountStrategy.php";

class NoDiscountStrategy implements DiscountStrategy
{
    public function calculateDiscount(float $price): float
    {
        return 0.0;
    }
}

class PercentDiscountStrategy implements DiscountStrategy
{
    private float $percentage;

    public function __construct(float $percentage)
    {
        $this->percentage = $percentage;
    }

    public function calculateDiscount(float $price): float
    {
        return $price * $this->percentage;
    }
}

class  FixedDiscountStrategy implements DiscountStrategy
{
    private float $discount;

    public function __construct(float $discount)
    {
        $this->discount = $discount;
    }

    public function calculateDiscount(float $price = 0): float
    {
        return $this->discount;
    }
}