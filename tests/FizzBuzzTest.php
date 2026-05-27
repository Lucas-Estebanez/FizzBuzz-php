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
    public function fizzBuzzReturnsNumberStringForInputNotFizzOrBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $value = $fizzBuzz->fizzBuzz(1);

        $this->assertEquals("1", $value);
        $this->assertisString($value);
    }

    /**
     * @test
     */
    public function fizzBuzzReturnsFizzForInputIsFizz()
    {
        $fizzBuzz = new FizzBuzz();

        $input = 3;
        $this->assertTrue($fizzBuzz->isFizz($input));
        $this->assertFalse($fizzBuzz->isBuzz($input));

        $value = $fizzBuzz->fizzBuzz($input);
        $this->assertEquals("Fizz", $value);
    }

    /**
     * @test
     */
    public function fizzBuzzReturnsBuzzForInputIsBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $input = 5;
        $this->assertTrue($fizzBuzz->isBuzz($input));
        $this->assertFalse($fizzBuzz->isFizz($input));

        $value = $fizzBuzz->fizzBuzz($input);
        $this->assertEquals("Buzz", $value);
    }

    /**
     * @test
     */
    public function fizzBuzzReturnsFizzBuzzForInputIsFizzAndBuzz()
    {
        $fizzBuzz = new FizzBuzz();

        $input = 15;
        $this->assertTrue($fizzBuzz->isBuzz($input));
        $this->assertTrue($fizzBuzz->isFizz($input));

        $value = $fizzBuzz->fizzBuzz($input);
        $this->assertEquals("FizzBuzz", $value);
    }

    /**
     * @test
     */
    public function isFizzReturnsTrueForInputDivisibleBy3()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isFizz(27);

        $this->assertTrue($booleanValue);
    }

    /**
     * @test
     */
    public function isFizzReturnsTrueForInputContainsNumber3()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isFizz(31);

        $this->assertTrue($booleanValue);
    }

    /**
     * @test
     */
    public function isFizzReturnsFalseForInputNotDivisibleBy3AndDoesntContainNumber3()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isFizz(29);

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
    public function isBuzzReturnsTrueForInputContainsNumber5()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isBuzz(52);

        $this->assertTrue($booleanValue);
    }

    /**
     * @test
     */
    public function isBuzzReturnsFalseForInputNotDivisibleBy5AndDoesntContainNumber5()
    {
        $fizzBuzz = new FizzBuzz();

        $booleanValue = $fizzBuzz->isBuzz(4);

        $this->assertFalse($booleanValue);
    }
}
