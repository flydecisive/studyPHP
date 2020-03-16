<?php
//Программа вычисляет общую стоимость трапезы
$gamburgerCoast = 4.95;
$milkShake = 1.95;
$cola = 0.85;
$dinner = $gamburgerCoast * 2 + $milkShake + $cola;
$tip = $dinner * 0.16;
$tax = ($dinner + $tip) * 0.075;
$total = $dinner + $tip + $tax;
echo $total;
?>