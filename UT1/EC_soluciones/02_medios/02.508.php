<?php
/*
Escribe un programa que solicite que realice lo siguiente:

Agregar una frase de forma manual $frase = "Soy feliz".
Solicite un número para el desplazamiento de los caracteres.
Reemplace los espacios por `_'.
Que almacene cada caracter en un array
Y que aplique la rotación indicada en el número introducido.
La rotación puede ser positiva o negativa.
*/

$frase = "Esta dia es un dia perfecto para aprender PHP";
$shift = 4;

//Reemplazar el ' ' por ' _';
$frase = str_replace(" ", "_", $frase);

//Convertir string -> array
$arrFrase = str_split($frase);

$newArr = [];

//Calcular cola y cabeza
if ($shift > 0) {
    $cola = array_slice($arrFrase, count($arrFrase) - $shift, $shift);
    $cabeza = array_slice($arrFrase, 0, count($arrFrase) - $shift);
    //Nuevo array
    $newArr = [...$cola, ...$cabeza];
} elseif ($shift < 0) {
    $cola = array_slice($arrFrase, 0, abs($shift));
    $cabeza = array_slice($arrFrase, abs($shift), count($arrFrase));
    //Nuevo array
    $newArr = [...$cabeza, ...$cola];

} else {
    $cola = [];
    $cabeza = $arrFrase;
}


$fraseShift = implode($newArr);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02.508</title>
</head>

<body>
<p>Frase Original "<?= $frase ?>"</p>
<p>Frase Desplazada <?= $shift ?> posiciones: "<?= $fraseShift ?>"</p>
</body>

</html>



