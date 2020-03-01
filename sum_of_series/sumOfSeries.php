<?php

// Функция считает сумму ряда
function sumOfSeries($start, $end)
{   
    $total = 0;
    for ($start; $start <= $end; $start++) {
        $total += $start;
    }

    return $total;
}