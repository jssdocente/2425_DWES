<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
<h3>Información</h3>

<form action="04.007_logic.php" method="POST">
    <p><label>Nombre: <input type="text" name="nombre" size="20" maxlength="20"></label></p>
    <p><label>Dirección: <input type="text" name="direccion" size="20" maxlength="50"></label></p>
    <p><label>Email: <input type="email" name="email" size="20" maxlength="50"></label></p>
    <p><label>Teléfono: <input type="tel" name="telefono" size="20" maxlength="50"></label></p>

    <p>
        <input type="submit" value="Enviar">
        <input type="reset" value="Borrar">
    </p>
    <?php if (!empty($errors)): ?>
        <h3>Errores</h3>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</form>

</body>
</html>