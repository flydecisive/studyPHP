<?php

function filterString ($str, $chr)
{
    $length = strlen($str);
    $i = 0;
    $newStr = '';
    while ($i <= $length - 1) {
        if ($str[$i] === $chr) {
            $i++;
            ($str[$i] === $chr) ? $i++ : $i;
            $newStr = "{$newStr}{$str[$i]}";
        } else {
            $newStr = "{$newStr}{$str[$i]}";
        }
        $i++;
    }
    return $newStr;
}

$str = 'If I look back I am lost';
echo filterString($str, 'I'); // => 'f  look back  am lost'
echo "\n";
echo filterString($str, 'o');
