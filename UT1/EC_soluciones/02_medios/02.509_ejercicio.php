<?php
/*
 * Escribe un programa que genere 50 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios y generará una lista ordenada. A continuación, el programa cambiará 2 valrores `$valor1, $valor2` (definidos por tí)
 * y a continuación cambiará todas las ocurrencias del primer valor por el segundo,
 * mostrandose los números que han cambiado en un color <em style="color: red">diferente</em>.
 */

$numeros = [];
$valor1 = 3;
$valor2 = "A";

// Generar 50 números aleatorios del 0 al 20 con foreach
foreach (range(0, 49) as $i) {
    $numeros[] = rand(0, 20);
}

// Buscar los valores a cambiar
foreach ($numeros as $key => $numero) {
    if ($numero == $valor1) {
        $numeros[$key] = $valor2;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>509</title>
    <style>
        .diferente {
            color: red;
        }
    </style>
</head>

<body>
<ul>
    <?php foreach ($numeros as $num) : ?>
        <li class="<?= ($num === $valor2) ? 'diferente' : ''; ?>"><?= $num ?></li>
    <?php endforeach ?>
</ul>
</body>

</html>