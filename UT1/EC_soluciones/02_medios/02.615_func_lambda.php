<?php

/*
 *   Crea una función que reciba un número variable de argumentos (opción ...) y aplicar una función `lambda` pasada como parámetro.<br>
     La función devolverá un array, con los argumentos pasados y aplicada la función a cada uno de ellos.<br>
*/

$arrAleatorios = [];

for ($i = 0; $i < 30; $i++) {
    $arrAleatorios[] = rand(0, 500);
}

//Función un número indefinido de argumentos y aplicar una función lambda a cada uno de ellos
function filtrarByVariadics($fn, ...$arr): array {
    return array_filter($arr, $fn);
}

function dump($arr): void {
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1>Ejercicio 615 Funciones Lambda.</h1>
<h4>Prueba de uso de operador (...) y pasar funcion lambda como parámetro</h4>
<ul>
    <li>Números
        Pares: <?php dump(filtrarByVariadics(fn($num) => $num % 2 == 0, 5, 7, 15, 20, 30, 40, 50, 60, 70, 80, 90, 100)) ?></li>
    <li>Números
        Impares: <?php dump(filtrarByVariadics(fn($num) => $num % 2 != 0, 5, 7, 15, 20, 30, 40, 50, 60, 70, 80, 90, 100)) ?></li>
</body>

</html>