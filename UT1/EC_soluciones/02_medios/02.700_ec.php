<?php

/*
 * Crea una función `contarLetrasPosicionImpar` que reciba una cadena, y devuelva el número de caracteres en posiciones impares.<br>
   Para probar la función, prueba varias opciones con frases de distinta longitud.
 * */

function contarLetrasPosicionImpar(string $cadena): int {
    $contador = 0;
    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($i % 2 != 0) {
            $contador++;
        }
    }

    return $contador;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 700</title>
</head>
<body>
<h1>Ejercicio 700</h1>
<h3>Ejercicio Contar Letras en Posiciones Impares</h3>
<ul>
    <li>La frase "Hola" tiene <?= contarLetrasPosicionImpar("Hola") ?> letras en posiciones impares</li>
    <li>La frase "Hola Mundo" tiene <?= contarLetrasPosicionImpar("Hola Mundo") ?> letras en posiciones impares</li>
    <li>La frase "Hola Mundo Cruel" tiene <?= contarLetrasPosicionImpar("Hola Mundo Cruel") ?> letras en posiciones
        impares
    </li>
    <li>La frase "Hola Mundo Cruel y Despiadado" tiene <?= contarLetrasPosicionImpar("Hola Mundo Cruel y Despiadado") ?>
        letras en posiciones impares
    </li>
    <li>La frase "Hola Mundo Cruel y Despiadado y Sin Piedad"
        tiene <?= contarLetrasPosicionImpar("Hola Mundo Cruel y Despiadado y Sin Piedad") ?> letras en posiciones
        impares
    </li>
</ul>
</body>
</html>