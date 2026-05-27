<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    /**
     * @param $input
     * @return string
     */
    function fizzBuzz($input): string {
        if ($input % 3 === 0) {
            return "Fizz";
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