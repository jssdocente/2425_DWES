<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02.504 Ejercicio</title>
</head>

<body>
<?php

$shift = 2;

$frase = "SOY FELIZ";

//Reemplazar el ' ' por ' _';
$frase = str_replace(" ", "_", $frase);

//Convertir string -> array
$arrFrase = str_split($frase);

//Calcular cola y cabeza
$cola = array_slice($arrFrase, count($arrFrase) - $shift, $shift);
$cabeza = array_slice($arrFrase, 0, count($arrFrase) - $shift);

//Nuevo array
$newArr = [...$cola, ...$cabeza];
//print_r($newArr);

$fraseShift = implode($newArr);

echo ""
?>
<p>Frase Original "<?= $frase ?>"</p>
<p>Frase Desplazada <?= $shift ?> posiciones: "<?= $fraseShift ?>"</p>
</body>

</html>