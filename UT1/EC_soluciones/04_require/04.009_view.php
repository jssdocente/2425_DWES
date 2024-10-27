<?php
//Agrega lo necesario para que este script funcione
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 9</title>
</head>
<body>
<h3>Provincias que cumplen los criterios</h3>
<ul>
    <?php foreach ($provinciasFiltered as $provincia): ?>
        <li><?= $provincia['NOMBRE_PROVINCIA'] ?> (<?= $provincia['CODPROV'] ?>)
            - <?= $provincia['COMUNIDAD_CIUDAD_AUTONOMA'] ?></li>
    <?php endforeach; ?>
</ul>
<?php if (count($provinciasFiltered) == 0) : ?>
    <p>No se han encontrado provincias que cumplan los criterios.</p>
    <p>
        <a href="04.009_form.php">Probar de nuevo</a>
    </p>
<?php else : ?>
    <p>
        <a href="04.009_form.php">Volver al formulario</a>
    </p>
<?php endif; ?>
</body>
</html>


