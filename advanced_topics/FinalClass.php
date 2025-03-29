<?php

namespace advanced_topics;

final class FinalClass
{
    public const float APP_VERSION = 1.0;
}

class PaymentProcessor
{
    public final function processAmount(float $amount):string
    {
        return "Payment Processed";
    }
}

class AdvancedPaymentProcessor extends PaymentProcessor
{
//    It's not allowed to override final method extending a final class
//    public final function processAmount(float $amount):string
//    {
//        return "Payment Processed";
//    }
}

$app = new FinalClass();
echo $app::APP_VERSION.PHP_EOL;
$pay = new PaymentProcessor();
echo $pay->processAmount(2);