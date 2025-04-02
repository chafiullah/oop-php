<?php
declare(strict_types=1);
namespace design_patterns\dependency_injection;
include_once __DIR__."/PaymentGatewayInterface.php";
include_once __DIR__."/LoggerInterface.php";
class PaymentProcessor
{
    private PaymentGatewayInterface $gateway;
    private LoggerInterface $logger;
    public function __construct(PaymentGatewayInterface $gateway, LoggerInterface $logger)
    {
        $this->gateway = $gateway;
        $this->logger = $logger;
    }
    public function setPaymentGateway(PaymentGatewayInterface $gateway): void
    {
        $this->gateway = $gateway;
    }
    public function processPayment(float $amount): void
    {
        if ($this->gateway->processPayment($amount))
        {
            $this->logger->log("Payment of $amount");
        }else{
            $this->logger->log("Payment has been denied..");
        }
    }
}