<?php
declare(strict_types=1);
namespace design_patterns\factory_pattern;

include_once __DIR__ . '/NotificationFactory.php';

$smsNotification = NotificationFactory::createNotification('sms');
echo $smsNotification->sendNotification('This is a sms notification');

$emailNotification = NotificationFactory::createNotification('email');
echo $emailNotification->sendNotification('This is an email notification');