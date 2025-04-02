<?php
declare(strict_types=1);
namespace design_patterns\dependency_injection;

include_once __DIR__ . '/StripePaymentGateway.php';
include_once __DIR__ . '/PaypalPaymentGateway.php';
include_once __DIR__ . '/FileLogger.php';
include_once __DIR__ . '/PaymentProcessor.php';

$stripe = new StripePaymentGateway();
$paypal = new PaypalPaymentGateway();
$logger = new FileLogger();
$paymentProcessor = new PaymentProcessor($stripe, $logger);
$paymentProcessor->processPayment(150.00);
$paymentProcessor->setPaymentGateway($paypal);
$paymentProcessor->processPayment(150.00);