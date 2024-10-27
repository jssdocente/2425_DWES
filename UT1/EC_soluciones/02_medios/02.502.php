<?php
/*
 * 502. Rellena un array de 100 elementos de manera aleatoria con valores de `M` y `F`. Una vez completado vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo `[ 'M' => 0, 'F' => 0 ]` (no utilices variables para contar los elementos). Al final muestra el resultado por pantalla.
 */

$genero = ['M', 'F'];
$generoCount = ['M' => 0, 'F' => 0];
$arrayDatos = [];

// Rellena un array de 100 elementos de manera aleatoria con valores de `M` y `F`
for ($i = 0; $i < 100; $i++) {
    $arrayDatos[] = $genero[rand(0, 1)];
}

// Calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo `[ 'M' => 0, 'F' => 0 ]`
foreach ($arrayDatos as $value) {
    $generoCount[$value] = $generoCount[$value] + 1;
}
?>

<main>
    <h1>502. Rellena un array de 100 elementos de manera aleatoria con valores de `M` y `F`</h1>
    <p>Array de datos: <?= implode(', ', $arrayDatos) ?></p>
    <p>Resultado: <?= json_encode($generoCount) ?></p>
</main>
