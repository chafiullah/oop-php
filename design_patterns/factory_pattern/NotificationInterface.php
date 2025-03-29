<?php
declare(strict_types=1);
namespace design_patterns\factory_pattern;

interface NotificationInterface
{
    public function sendNotification(string $message): string;
}