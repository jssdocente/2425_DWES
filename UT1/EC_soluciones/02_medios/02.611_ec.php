<?php

/*
 *  Crea una función `siguientePrimo` que devuelva el siguiente número primo más próximo al número pasado como parámetro.
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

function siguientePrimo(int $num): int {
    $i = $num + 1;

    while (true) {
        if (esPrimo($i)) {
            return $i;
        }

        $i++;
    }
}

$randNumbers = [];

foreach (range(1, 50) as $num) {
    $randNumbers[] = rand(1, 800);
}


?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1>Ejercicio 611</h1>
<h4>Prueba de obtener el siguiente primo Números del 1 - 100</h4>
<ul>
    <?php foreach ($randNumbers as $num): ?>
        <li>El número <?= $num ?> su siguiente primo es: <?= siguientePrimo($num) ?></li>
    <?php endforeach; ?>
</ul>

</body>

</html>