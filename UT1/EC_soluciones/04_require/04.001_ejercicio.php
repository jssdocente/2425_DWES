<?php
require_once 'biblioteca/funciones01.php';

$num = 123456789;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
<h1>Ejercicio 1</h1>
<p>El número <?= $num ?> tiene <?= digitos($num) ?> dígitos.</p>
<p>El dígito 3 del número <?= $num ?> es <?= digitoN($num, 3) ?>.</p>
<p>Si le quitamos 3 dígitos por detrás al número <?= $num ?>, nos queda <?= quitaPorDetras($num, 3) ?>.</p>
</body>
</html>