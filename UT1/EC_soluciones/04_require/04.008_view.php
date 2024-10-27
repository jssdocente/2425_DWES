<?php
require_once 'biblioteca/funciones05.php';

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
<h1>Conversor de dólares a euros</h1>
<p><?= $dolares ?> dólares son <?= dolarToEuro($dolares, $cambio) ?> euros.</p>
<br>
<br>
<a href="04.008_form.php">Volver</a>
</body>
</html>

