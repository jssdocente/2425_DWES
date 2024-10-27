<?php
require_once 'biblioteca/funciones04.php';

$frase = 'La ruta nos aportó otro paso natural';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
<h1>Ejercicio 4</h1>
<p>La frase: "<?= $frase ?>" convertida a cani es:<br><?= convertirFraseCani($frase) ?>.</p>
<hr>
<p>La frase: "<?= $frase ?>" codificada con el cifrado César es:<br><b><?= codificarCesar($frase, 3) ?>.</b></p>
<p>La frase "<?= $frase ?>" decodificada con el cifrado César
    es:<br><strong><?= decodificarCesar(codificarCesar($frase, 3), 3) ?></strong>.</p>
</body>
</html>
