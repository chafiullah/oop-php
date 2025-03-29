<?php
declare(strict_types=1);
namespace design_patterns\factory_pattern;

include_once __DIR__ . "/NotificationInterface.php";
class EmailNotification implements NotificationInterface
{
    public function sendNotification(string $message): string
    {
        return "Email notification has been sent: {$message}".PHP_EOL;
    }
}