<?php

/*
 * Escribe una función `esPalindromo` que reciba una cadena y devuelva `true` si es un palíndromo, `false` en caso contrario. <br>
     Para probar la función, muestra al menos 3 palabras, y ejecuta las llamadas dentro de un párrafo `<p>`, mostrando el resultado de cada llamada.
       > Ejemplo: `<p>OSO es palindromo? <?= ... ?> </p>`, utilizando un condicional ternario.
 * */

function esPalindromo(string $cadena): bool {
    $cadena = strtolower($cadena);
    $cadena = str_replace(" ", "", $cadena);
    $cadenaInvertida = strrev($cadena);
    return $cadena === $cadenaInvertida;

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
    <title>Ejercicio 703</title>
</head>
<body>
<h1>Ejercicio 703</h1>
<h3>Ejercicio Palindromos</h3>
<ul>
    <li>OSO es palindromo? <?= esPalindromo("OSO") ? "Sí" : "No" ?></li>
    <li>ANNA es palindromo? <?= esPalindromo("ANNA") ? "Sí" : "No" ?></li>
    <li>RECONOCER es palindromo? <?= esPalindromo("RECONOCER") ? "Sí" : "No" ?></li>
    <li>LA RUTA NATURAL es palindromo? <?= esPalindromo("LA RUTA NATURAL") ? "Sí" : "No" ?></li>
    <li>TENGO UN NUEVO OCHO es palindromo? <?= esPalindromo("TENGO UN NUEVO OCHO") ? "Sí" : "No" ?></li>
</ul>
</body>
</html>