<?php
require_once 'biblioteca/funciones03.php';

$frase = 'La ruta nos aportó otro paso natural';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
<h1>Ejercicio 3</h1>
<p>La frase "<?= $frase ?>" tiene <?= contarLetrasPosicionImpar($frase) ?> letras en posición impar.</p>
<hr>
<p>La frase "<?= $frase ?>" tiene las siguientes vocales:</p>
<ul>
    <?php foreach (contarVocales($frase) as $vocal => $cantidad): ?>
        <li><?= $vocal ?>: <?= $cantidad ?></li>
    <?php endforeach; ?>
</ul>
<hr>
<p>La frase "<?= $frase ?>" tiene las siguientes características:</p>
<ul>
    <?php foreach (analizador($frase) as $caracteristica => $valor): ?>
        <li><?= $caracteristica ?>: <?= $valor ?></li>
    <?php endforeach; ?>
</ul>
<hr>
<p>La frase "<?= $frase ?>" <?= esPalindromo($frase) ? 'es' : 'no es' ?> palíndromo.</p>
</body>
</html>
