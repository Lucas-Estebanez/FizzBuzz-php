<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
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
            return "FizzBuzz";
        }
        if($this->isFizz($input)) {
            return "Fizz";
        }
        if($this->isBuzz($input)) {
            return "Buzz";
        }
        return $input;
    }

    /**
     * @param $input
     * @return bool
     */
    function isFizz($input): bool {
        return $input % 3 === 0;
    }

    /**
     * @param $input
     * @return bool
     */
    function isBuzz($input): bool {
        return $input % 5 === 0;
    }
}