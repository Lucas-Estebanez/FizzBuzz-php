<?php

declare(strict_types=1);

namespace Deg540\CleanCodeKata9\Test;

use Deg540\CleanCodeKata9\FizzBuzz;
use PHPUnit\Framework\TestCase;

final class FizzBuzzTest extends TestCase
{
    /**
     * @test
     */
    public function returnsNumberStringForIntegerInput()
    {
        $fizzBuzz = new FizzBuzz();

        $value = $fizzBuzz->fizzBuzz(1);

        $this->assertIsString($value);
    }

    /**
     * @test
     */
    public function isFizzReturnsTrueForInputDivisibleBy3()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isFizz(3);

        $this->assertTrue($booleanValue);
    }

    /**
     * @test
     */
    public function isFizzReturnsFalseForInputNotDivisibleBy3()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isFizz(2);

        $this->assertFalse($booleanValue);
    }

    /**
     * @test
     */
    public function isBuzzReturnsTrueForInputDivisibleBy5()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isBuzz(5);

        $this->assertTrue($booleanValue);
    }

    /**
     * @test
     */
    public function isBuzzReturnsFalseForInputNotDivisibleBy5()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isBuzz(4);

        $this->assertFalse($booleanValue);
    }
}
