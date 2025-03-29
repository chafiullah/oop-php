<?php
namespace design_patterns\strategy_pattern;
include_once __DIR__ . "/DiscountContext.php";
include_once __DIR__ . "/DiscountStrategies.php";

$price = 100.00;

$discountContext = new DiscountContext(new NoDiscountStrategy());
echo "You don't have any discount {$discountContext->getFinalPrice($price)}\n";


$discountContext->setDiscountStrategy(new PercentDiscountStrategy(0.50));
echo "You don't have discount {$discountContext->getFinalPrice($price)}\n";

$discountContext->setDiscountStrategy(new FixedDiscountStrategy(10));
echo "You don't have discount {$discountContext->getFinalPrice($price)}\n";