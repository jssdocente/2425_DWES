<?php

/*
 *  Crea una función `volteaNumero` que devuelva el número pasado como parámetro, pero volteado
 * */
function volteaNumero(int $num): int {
    return (int)strrev($num);
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1>Ejercicio 613</h1>
<h4>Prueba de voltear números</h4>
<ul>
    <li>El número 12345 volteado es: <?= volteaNumero(12345) ?></li>
    <li>El número 123456789 volteado es: <?= volteaNumero(123456789) ?></li>
    <li>El número 987654321 volteado es: <?= volteaNumero(987654321) ?></li>
</ul>
</body>

</html>