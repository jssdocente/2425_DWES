<?php

/*
 *   Usa la función `array_map` para aplicar una función a cada uno de los elementos de un array. <br>

     - Crea una función que reciba un número y devuelva el cuadrado del mismo y probar con un array de números aleatorios. (Mostrar con `var_dump()`)
     - Igual, pero con una función que devuelva el cubo del número pero pasada como función anónima (Mostrar con `var_dump()`)
     - Igual, pero pasada como función flecha (Mostrar con `var_dump()`)
 * */

$arrAleatorios = [];

for ($i = 0; $i < 30; $i++) {
    $arrAleatorios[] = rand(0, 500);
}

function filtrar($arr, $fn): array {
    return array_filter($arr, $fn);
}

;

function dump($arr): void {
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
}

$elevarAlCubo = function ($num) {
    return $num ** 3;
};


?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1>Ejercicio 613 Funciones Lambda. Uso de array_map</h1>
<h4>Prueba de números pares e impares con 50 números aleatorios</h4>
<ul>
    <li>Elevar números ^2 (arrow function): <?php dump(array_map(fn($num) => $num ** 2, $arrAleatorios)) ?></li>
    <li>NElevar números ^3 (funcion anónima): <?php dump(array_map($elevarAlCubo, $arrAleatorios)) ?></li>
    <li>NElevar números ^3 (arrow function): <?php dump(array_map(fn($num) => $num ** 3, $arrAleatorios)) ?></li>

</ul>
</body>

</html>