<?php

function doesContain($str, $letter)
{
    $length = strlen($str);
    $i = 0;
    while ($i <= $length - 1) {
        if ($str[$i] === $letter) {
            return true;
        }

        $i++;
    }
    return false;
}