<?php

/*
 * Crea una función `contarVocales` que reciba una cadena, y devuelva un array asociativo con cada una de las vocales como clave, y el total por cada una como valor. <br>
   Para probar la función, prueba varias opciones con frases de distinta longitud
 * */

function contarVocales(string $cadena): array {
    $vocales = ["a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0];
    for ($i = 0; $i < strlen($cadena); $i++) {
        $letra = strtolower($cadena[$i]);
        if (array_key_exists($letra, $vocales)) {
            $vocales[$letra]++;
        }
    }

    return $vocales;
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
    <title>Ejercicio 700</title>
</head>
<body>
<h1>Ejercicio 701</h1>
<h3>Ejercicio Contar Vocales</h3>
<ul>
    <li>La frase "Hola" tiene <?= dump(contarVocales("Hola")) ?></li>
    <li>La frase "Hola Mundo" tiene <?= dump(contarVocales("Hola Mundo")) ?></li>
    <li>La frase "Hola Mundo Cruel" tiene <?= dump(contarVocales("Hola Mundo Cruel")) ?></li>
    <li>La frase "Hola Mundo Cruel y Despiadado"
        tiene <?= dump(contarVocales("Hola Mundo Cruel y Despiadado")) ?>
    </li>
    <li>La frase "Hola Mundo Cruel y Despiadado y Sin Piedad"
        tiene <?= dump(contarVocales("Hola Mundo Cruel y Despiadado y Sin Piedad")) ?>
    </li>
</body>
</html>