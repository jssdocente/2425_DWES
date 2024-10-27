<?php

/*
 *  Crea una función `esPrimo` que devuelva `true` si un número es primo, `false` en caso contrario
 * */

function esPrimo(int $num): bool {
    if ($num < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1>Ejercicio 610</h1>
<h4>Prueba de números primos: Números primos del 1 - 100</h4>
<ul>
    <?php for ($i = 1; $i <= 100; $i++): ?>
        <li>El número <?= $i ?> <?= esPrimo($i) ? "es" : "<b>NO</b> es" ?> primo.</li>
    <?php endfor; ?>
</ul>

</body>

</html>