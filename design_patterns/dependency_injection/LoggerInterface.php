<?php
declare(strict_types=1);
namespace  design_patterns\dependency_injection;

interface LoggerInterface
{
    public function log(string $message): void;
}