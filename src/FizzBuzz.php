<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{

    const string FIZZ = "Fizz";
    const string BUZZ = "Buzz";
    const string FIZZBUZZ = "FizzBuzz";

    /**
     * @param int $max
     * @param int $min
     * @return void
     */
    function printFizzBuzzList(int $max = 100, int $min = 1): void {
        for ($i = $min; $i <= $max; $i++) {
            echo $this->fizzBuzz($i) . "\n";
        }
    }

    /**
     * @param $input
     * @return string
     */
    function fizzBuzz($input): string {
        if($this->isFizz($input) && $this->isBuzz($input)) {
            return self::FIZZBUZZ;
        }
        if($this->isFizz($input)) {
            return self::FIZZ;
        }
        if($this->isBuzz($input)) {
            return self::BUZZ;
        }
        return $input;
    }

    /**
     * @param $input
     * @return bool
     */
    function isFizz($input): bool {
        return $input % 3 === 0 || str_contains($input, "3");
    }

    /**
     * @param $input
     * @return bool
     */
    function isBuzz($input): bool {
        return $input % 5 === 0 || str_contains($input, "5");
    }
}