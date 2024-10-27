<?php

/*
 *  Crea un programa que pase un número binario (indicado por tí), y lo pase a decimal.
 * Muestre el número en binario y el número en decimal.
 * */

//Crea la función para conversión de binario a decimal
$binario = "1010";

function binarioToDecimal($binario) {
    $decimal = 0;
    $longitud = strlen($binario);
    for ($i = 0; $i < $longitud; $i++) {
        $decimal += $binario[$i] * pow(2, $longitud - $i - 1);
    }
    return $decimal;
}

//Función para generar un número binario aleatorio
function generarBinario($longitud = 4) {
    $binario = "";
    for ($i = 0; $i < $longitud; $i++) {
        $binario .= rand(0, 1);
    }
    return $binario;
}

?>

<!DOCTYPE html>
<html lang="en">
<body>
<h1>Ejercicio 615</h1>
<h4>Conversión de binario a decimal</h4>
<ul>
    <li>El número binario <?= $binario ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(3) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(5) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(6) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(4) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(7) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(8) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(9) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(10) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(11) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(12) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(13) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
    <li>El número binario <?= $binario = generarBinario(14) ?> en decimal es: <?= binarioToDecimal($binario) ?></li>
</ul>
</body>

</html>