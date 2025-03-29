<?php

namespace design_patterns\factory_pattern;

include_once __DIR__ . "/NotificationInterface.php";
include_once __DIR__ . "/SmsNotification.php";
include_once __DIR__ . "/EmailNotification.php";
class NotificationFactory
{
    public static function createNotification(string $type): NotificationInterface
    {
        return match (strtolower($type)) {
            "sms" => new SmsNotification(),
            "email" => new EmailNotification(),
            default => throw new \InvalidArgumentException("Invalid notification type {$type}"),
        };
    }
}