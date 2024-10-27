<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
<h3>Conversor de dólares a euros</h3>

<form action="04.008_logic.php" method="GET">
    <div>
        <div>
            <div>
                <label for="dolares">Dólares:</label><br>
                <input type="number" name="dolares" id="dolares">
            </div>
            <?php if ($errors["dolares"] ?? false) : ?>
                <p><?= $errors["dolares"] ?></p>
            <?php endif; ?>
        </div>
        <br>
        <div>
            <div>
                <label for="cambio">Cambio:</label><br>
                <input type="number" name="cambio" id="cambio" step=".01">
            </div>
            <?php if ($errors["cambio"] ?? false) : ?>
                <p><?= $errors["cambio"] ?></p>
            <?php endif; ?>
        </div>
    </div>
    <br>
    <input type="submit" value="Enviar">
</form>
</body>
</html>