<?php

/*
 *  Crea una función anónima que calcule si un número es par y otra para impar, y asignar a una variable.
     Utilizando el array de números aleatorios `$arrAleatorios`, crea una función `filtrarPar` que filtre los números pares, y otra `filtrarImpar` que filtre los números impares, utilizando las funciones anónimas y devuelva un array con los números filtrados.
     Probar la función con el array de números aleatorios, y mostrando el resultado a través de `var_dump()`.
 * */

$arrAleatorios = [];

for ($i = 0; $i < 30; $i++) {
    $arrAleatorios[] = rand(0, 500);
}

function filtrar($arr, $fn) {
    $resultado = [];
    foreach ($arr as $num) {
        if ($fn($num)) {
            $resultado[] = $num;
        }
    }

    return $resultado;
}

;

function dump($arr): void {
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
}


?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1>Ejercicio 611 Funciones Lambda</h1>
<h4>Prueba de números pares e impares con 50 números aleatorios</h4>
<ul>
    <li>Números Pares: <?php dump(filtrar($arrAleatorios, fn($num) => $num % 2 == 0)) ?></li>
    <li>Números Impares: <?php dump(filtrar($arrAleatorios, fn($num) => $num % 2 != 0)) ?></li>

</ul>
</body>

</html>