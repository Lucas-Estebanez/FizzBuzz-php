<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    /**
     * @param $input
     * @return string
     */
    function fizzBuzz($input): string {
        if($input % 5 == 0) {
            return "Buzz";
        }
        return $this->isFizz($input) ? "Fizz" : $input;
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