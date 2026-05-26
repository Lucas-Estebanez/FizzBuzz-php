<?php

namespace Deg540\CleanCodeKata9;

class FizzBuzz
{
    /**
     * @param $input
     * @return string
     */
    function fizzBuzz($input): string {
        return $input;
    }

    /**
     * @param $input
     * @return bool
     */
    function isFizz($input): bool {
        return $input % 3 === 0;
    }
}