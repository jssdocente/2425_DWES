<?php
require_once 'biblioteca/funciones02.php';

$num = 123456789;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
<h1>Ejercicio 2</h1>
<p>El número <?= $num ?> <?= esCapicua($num) ? 'es' : 'no es' ?> capicúa.</p>
<p>El número <?= $num ?> <?= esPrimo($num) ? 'es' : 'no es' ?> primo.</p>
<p>El siguiente número primo a <?= $num ?> es <?= siguientePrimo($num) ?>.</p>
</body>
</html>