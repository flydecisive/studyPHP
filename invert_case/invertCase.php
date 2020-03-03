<?php

function invertCase($text)
{
    // BEGIN
    $len = strlen($text);
    $result = '';
    for ($i = 0; $i < $len; $i++) {
        $symbol = substr($text, $i, 1);
        $lowerSymbol = strtolower($symbol);
        if ($symbol === $lowerSymbol) {
            $result .= strtoupper($symbol);
        } else {
            $result .= $lowerSymbol;
        }
    }

    return $result;
    // END
}

$str = 'ПрИвЕт!';
print_r(invertCase($str));