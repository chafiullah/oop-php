<?php
declare(strict_types=1);
namespace design_patterns\dependency_injection;

class PaypalPaymentGateway implements PaymentGatewayInterface
{
    public function processPayment(float $amount): bool
    {
        echo "Thank you for choosing paypal as your payment processing partner:".PHP_EOL;
        echo "Processing payment of $amount euros......".PHP_EOL;
        sleep(5);
        echo "Payment processed.".PHP_EOL;
        return true;
    }
}
{

}