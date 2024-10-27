<?php

/*
scribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en un array.
El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del array (del 0 en adelante) y todos los números impares a las celdas restantes.
Muestra el array resultante con un print_r().
*/

$nums = [];
// Generar 20 números aleatorios
foreach (range(1, 20) as $i) {
    $nums[] = rand(0, 100);
}

// Desglosar en pares e impares
$pares = [];
$impares = [];

foreach ($nums as $num) {
    if ($num % 2 == 0) {
        $pares[] = $num;
    } else {
        $impares[] = $num;
    }
}

// Unir pares e impares
$nums = [...$pares, ...$impares];

// Mostrar array resultante
echo "<pre>";
var_dump($nums);
echo "</pre>";