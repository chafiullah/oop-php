<?php
declare(strict_types=1);
function addNumbers(float $a, float $b): float
{
    return $a + $b;
}

function divideNumbers(?float $a, ?float $b): float
{
    return match (true)
    {
        $a === null && $b === null => throw new InvalidArgumentException('Numbers should be of type float'),
        $b <= 0 => throw new InvalidArgumentException('Denominator should be greater than 0'),
        default => $a / $b
    };
}

function checkBalance(float $balance): bool
{
    return $balance >= 0;
}
