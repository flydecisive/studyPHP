<?php

//Функция, которая получает на вход два двоичных числа в виде строки, 
//складывает их и возвращает сумму в виде строки
function binarySum(string $firstBinNum, string $secondBinNum) :string
{
    $sum = bindec($firstBinNum) + bindec($secondBinNum);
    return decbin($sum);
}

print_r(binarySum('10', '1') . "\n");
print_r(binarySum('1101', '101'). "\n");