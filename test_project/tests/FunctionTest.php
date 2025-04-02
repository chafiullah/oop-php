<?php
declare(strict_types=1);
use PHPUnit\Framework\TestCase;
include_once __DIR__. "/../index.php";

class FunctionTest extends TestCase
{
    public float $numberOne = 25.00;
    public float $numberTwo = 25.00;
    public function testAddNumbersPass(): void
    {
        /**
         * declare expected results
         */
        $expectedResult = 50.00;
        $result = addNumbers($this->numberOne, $this->numberTwo);
        $this->assertEquals($expectedResult, $result);
    }
    public function testAddNumbersFail(): void
    {
        $expectedResult = 52.00;
        $result = addNumbers($this->numberOne, $this->numberTwo);
        $this->assertNotEquals($expectedResult, $result);
    }

    public function testDivideNumbers():void
    {
        $expectedResult = 1.00;
        $result = divideNumbers($this->numberOne, $this->numberTwo);
        $this->assertEquals($expectedResult, $result,"Expected result = $expectedResult but got result = $result");
    }
    public function testDivideNumbersByNull(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Denominator should be greater than 0');
        divideNumbers($this->numberOne, null);
    }
    public function testDivideNumbersByZero(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Denominator should be greater than 0');
        divideNumbers($this->numberOne, 0);
    }
    public function testDivideNumbersByNegative(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Denominator should be greater than 0');
        divideNumbers($this->numberOne, -1);
    }
}