<?php

/*
 * Crea una función `esCapicua` que devuelva `true` si un número es capicua, `false` en caso contrario. <br>
     Para probar la función, prueba con los siguientes números: 121, 12321, 12345, 123321, 123456, 1234321, 1234567, 123454321.
 * */

function esCapicua(int $num): bool {
    return $num == strrev($num);
}

$numeros = [121, 12321, 12345, 123321, 123456, 1234321, 1234567, 123454321];

?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1>Ejercicio 609</h1>
<?php foreach ($numeros as $num): ?>
    <p>El número <?= $num ?> <?= esCapicua($num) ? "es" : "<b>NO</b> es" ?> capicúa.</p>
<?php endforeach; ?>
</body>

</html>
