<?php
/*
Escribe un programa que solicite que realice lo siguiente:

Agregar una frase de forma manual $frase = "Soy feliz".
Solicite un número para el desplazamiento de los caracteres.
Reemplace los espacios por `_'.
Que almacene cada caracter en un array
Y que aplique la rotación indicada en el número introducido.
Es decir el nº de la posición 0, debe pasar a la posición 1, el de la 1 a la 2, etc.. el de la ultima posición debe pasar a la posición 0.Finalmente, muestra el contenido del array.
*/

$frase = "Esta dia es un dia perfecto para aprender PHP";
$shift = 4;

//Reemplazar el ' ' por ' _';
$frase = str_replace(" ", "_", $frase);

//Convertir string -> array
$arrFrase = str_split($frase);

//Calcular cola y cabeza
$cola = array_slice($arrFrase, count($arrFrase) - $shift, $shift);
$cabeza = array_slice($arrFrase, 0, count($arrFrase) - $shift);

//Nuevo array
$newArr = [...$cola, ...$cabeza];

$fraseShift = implode($newArr);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02.504</title>
</head>

<body>
<p>Frase Original "<?= $frase ?>"</p>
<p>Frase Desplazada <?= $shift ?> posiciones: "<?= $fraseShift ?>"</p>
</body>

</html>
