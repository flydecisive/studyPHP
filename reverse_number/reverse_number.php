<?php

namespace App\Number;

//Реализовать ф-цию, которая переворачивает число
function reverse(int $number): int
{
    $number = (string) $number;
    $newNumber = '';
    for ($i = strlen($number); $i >= 0; $i--) {
        $write = substr($number, $i, 1);
        if ($write === "-") {
            $newNumber = "{$write}{$newNumber}";
        } else {
            $newNumber = "{$newNumber}{$write}";
        }
    }
    return (int) $newNumber;
}

print_r(reverse(1234) . "\n");
print_r(reverse(1) . "\n");
print_r(reverse(-123) . "\n");
