<?php

/*
 *  Crea una función `analizador` que reciba una cadena, y devuelva un array asociativo con la siguiente información:

     - Número de palabras (key: palabras)
     - Número de letras (key: letras)
     - Número de vocales (key: vocales)
     - Número de consonantes (key: consonantes)
     - Número de espacios (key: espacios)
 * */

const CONSONANTES = "bcdfghjklmnñpqrstvwxyz";
const VOCALES = "aeiou";

function analizador(string $cadena): array {
    $resultado = [
        "palabras" => str_word_count($cadena),
        "letras" => strlen($cadena),
        "vocales" => 0,
        "consonantes" => 0,
        "espacios" => substr_count($cadena, " ")
    ];

    for ($i = 0; $i < strlen($cadena); $i++) {
        $letra = strtolower($cadena[$i]);
        //usa la función strpos para buscar la letra en la cadena de consonantes
        if (str_contains(VOCALES, $letra)) {
            $resultado["vocales"]++;
        } elseif (str_contains(CONSONANTES, $letra)) {
            $resultado["consonantes"]++;
        }

    }

    return $resultado;
}

function dump($arr): void {
    echo "<pre>";
    var_dump($arr);
    echo "</pre>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 702</title>
</head>
<body>
<h1>Ejercicio 702</h1>
<h3>Ejercicio Analizador</h3>
<ul>
    <li>La frase "Hola" tiene <?php dump(analizador("Hola")) ?></li>
    <li>La frase "Hola Mundo" tiene <?php dump(analizador("Hola Mundo")) ?></li>
    <li>La frase "Hola Mundo Cruel" tiene <?php dump(analizador("Hola Mundo Cruel")) ?></li>
    <li>La frase "Hola Mundo Cruel y Despiadado"
        tiene <?php dump(analizador("Hola Mundo Cruel y Despiadado")) ?>
    </li>
    <li>La frase "Hola Mundo Cruel y Despiadado y Sin Piedad"
        tiene <?php dump(analizador("Hola Mundo Cruel y Despiadado y Sin Piedad")) ?>
    </li>
</ul>
</body>
</html>