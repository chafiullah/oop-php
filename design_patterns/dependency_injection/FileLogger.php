<?php

namespace design_patterns\dependency_injection;
include_once __DIR__ . '/LoggerInterface.php';
class FileLogger implements LoggerInterface
{
    public function log(string $message): void
    {
        echo "Message: $message has been logged".PHP_EOL;
    }
}