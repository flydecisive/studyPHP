
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Программа вычисляет общую стоимость трапезы
$gamburgerCoast = 4.95;
$milkShake = 1.95;
$cola = 0.85;
$dinner = $gamburgerCoast * 2 + $milkShake + $cola;
$tip = $dinner * 0.16;
$tax = ($dinner + $tip) * 0.075;
$total = $dinner + $tip + $tax;
echo "Hamburger: {$hamburgerCoast} X 2<br>";
echo "Chocolate milk shake: $milkShake X 1 \n";
echo "Coca-Cola: $cola X 1";
echo "Цена обеда: $dinner";
print_r("Цена обеда с налогом: {($dinner + $tip)}");
echo "%.2f", $total;
?>
</body>
</html>