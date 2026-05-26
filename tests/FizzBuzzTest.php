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
        $example = new FizzBuzz();

        $integerValue = $example->fizzBuzz(1);

        $this->assertIsString($integerValue);
    }
}
