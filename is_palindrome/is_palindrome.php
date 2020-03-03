<?php
//Написать функцию проверки строки
//не используя реверс
function isPalindrome ($text) 
{   
    $revStr = "";
    for ($i = 0; $i < strlen($text); $i++) {
        $start = substr($text, $i, 1);
        $end = substr($text, -$i - 1, 1);
        if ($start === $end) {
            $revStr = "{$revStr}{$end}";
        }
    }
    if ($revStr === $text) {
        return true;
    } else {
        return false;
    }
}

var_dump(isPalindrome('radar'));
var_dump(isPalindrome('maam')); // true
var_dump(isPalindrome('abs'));
var_dump(isPalindrome('a'));     // true