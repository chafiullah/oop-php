<?php
declare(strict_types=1);
namespace tests;
require_once "./design_patterns/dependency_injection/PaymentGatewayInterface.php";
require_once "./design_patterns/dependency_injection/LoggerInterface.php";
require_once "./design_patterns/dependency_injection/PaymentProcessor.php";

use design_patterns\dependency_injection\LoggerInterface;
use design_patterns\dependency_injection\PaymentGatewayInterface;
use design_patterns\dependency_injection\PaymentProcessor;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
class PaymentProcessorTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testProcessPaymentSuccessful(): void
    {
        // Create a mock for PaymentGatewayInterface that simulates a successful payment.
        $gatewayMock = $this->createMock(PaymentGatewayInterface::class);
        $gatewayMock->method('processPayment')->willReturn(true);

        // Create a mock for LoggerInterface.
        // We expect the log method to be called once with a message that contains "processed successfully".
        $loggerMock = $this->createMock(LoggerInterface::class);
        $loggerMock->expects($this->once())
            ->method('log')
            ->with($this->stringContains("processed successfully"));

        // Instantiate the PaymentProcessor with the mocks.
        $processor = new PaymentProcessor($gatewayMock, $loggerMock);

        // Process a payment. Since the gateway returns true, the success message should be logged.
        $processor->processPayment(100.0);
    }

    /**
     * @throws Exception
     */
    public function testProcessPaymentFailure(): void
    {
        // Create a mock for PaymentGatewayInterface that simulates a failed payment.
        $gatewayMock = $this->createMock(PaymentGatewayInterface::class);
        $gatewayMock->method('processPayment')->willReturn(false);

        // Create a mock for LoggerInterface.
        // We expect the log method to be called once with a message that contains "failed".
        $loggerMock = $this->createMock(LoggerInterface::class);
        $loggerMock->expects($this->once())
            ->method('log')
            ->with($this->stringContains("failed"));

        // Instantiate the PaymentProcessor with the mocks.
        $processor = new PaymentProcessor($gatewayMock, $loggerMock);

        // Process a payment. Since the gateway returns false, the failure message should be logged.
        $processor->processPayment(100.0);
    }
}