<?php

$provincias = require "_res/data.php";
//var_dump($provincias);

//Ordenar por comunidad autónoma
usort($provincias, function ($a, $b) {
    return $a["COMUNIDAD_CIUDAD_AUTONOMA"] <=> $b["COMUNIDAD_CIUDAD_AUTONOMA"];
});

$provinciasSelect = array_map(function ($provincia) {
    return [
        "COMUNIDAD_CIUDAD_AUTONOMA" => $provincia["COMUNIDAD_CIUDAD_AUTONOMA"],
        "CODAUTON" => $provincia["CODAUTON"]
    ];
}, $provincias);

//Eliminar los elementos duplicados
$provinciasSelect = array_unique($provinciasSelect, SORT_REGULAR);

?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
</head>
<body>

<h3>Filtrar por Pronvicias</h3>

<form method="get" action="04.009_logic.php">
    <div>
        <label for="comunidad">Comunidad autónoma</label><br>
        <select name="comunidad" id="comunidad">
            <option value=""></option>
            <?php foreach ($provinciasSelect as $provincia) : ?>
                <option value="<?= $provincia["CODAUTON"] ?>"><?= $provincia["COMUNIDAD_CIUDAD_AUTONOMA"] ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <br>
    <div>
        <label for="nombre">Nombre de la provincia</label><br>
        <input type="text" name="nombre" id="nombre">
    </div>
    <br>
    <div>
        <label for="codigo">Código de la provincia</label><br>
        <input type="number" name="codigo" id="codigo">
    </div>

    <br>
    <button type="submit">Filtrar</button>

    <?php if (isset($errors) && count($errors) > 0) : ?>
        <h3>Errores</h3>
        <ul>
            <?php foreach ($errors as $error) : ?>
                <li><?= $error ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</form>
</body>
</html>
