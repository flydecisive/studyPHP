<?php

function isPowerOfThree(int $number) :bool
{
    $power = 0;
    $check = 0;
    while ($check <= $number) {
        $check = 3 ** $power;
        if ($check === $number) {
            return true;
        }
        $power++;
    }
    return false;
}

var_dump(isPowerOfThree(1));
var_dump(isPowerOfThree(3));
var_dump(isPowerOfThree(4));
var_dump(isPowerOfThree(9));