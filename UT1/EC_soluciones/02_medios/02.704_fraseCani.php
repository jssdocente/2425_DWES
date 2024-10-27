<?php

function fraseCani($frase)
{
    $frase = strtolower($frase);

    foreach(str_split($frase) as $pos => $letra) {
        if (ctype_punct($letra)) {
            continue;
        }

        if ($pos % 2 == 0) {
            $frase[$pos] = strtoupper($letra);
        }
    }
    return $frase;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 704</title>
</head>
<body>
<h3>Ejercicio Frase Cani</h3>
<p>La frase cani de "Hola, qué tal?" es: <?= fraseCani("Hola, qué tal?") ?></p>
</body>
</html>