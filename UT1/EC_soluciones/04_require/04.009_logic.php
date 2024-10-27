<?php

$provincias = require '_res/data.php';

//obtener los datos del formulario
$comunidad = $_GET['comunidad'];
$nombre = $_GET['nombre'];
$codigo = $_GET['codigo'];

$errors = [];

if (empty($comunidad) && empty($nombre) && empty($codigo)) {
    $errors[] = 'Debe introducir al menos un criterio de búsqueda';

    require_once '04.009_form.php';

    return;
}

function filtrarProvincias1($provincias, $comunidad, $nombre, $codigo) {
    return array_filter($provincias, function ($provincia) use ($comunidad, $nombre, $codigo) {
        return ($comunidad == '' || $provincia['CODAUTON'] == $comunidad) &&
            ($nombre == '' || str_contains(strtolower($provincia['NOMBRE_PROVINCIA']), $nombre)) &&
            ($codigo == '' || $provincia['CODPROV'] == $codigo);
    });
}

function filtrarProvincias2($provincias, string $comunidad, string $nombre, string $codigo) {
    $provinciasFiltered = [];
    foreach ($provincias as $provincia) {
        if (($comunidad == '' || $provincia['CODAUTON'] == $comunidad) &&
            ($nombre == '' || str_contains(strtolower($provincia['NOMBRE_PROVINCIA']), $nombre)) &&
            ($codigo == '' || $provincia['CODPROV'] == $codigo)) {

            $provinciasFiltered[] = $provincia;
        }
    }
    return $provinciasFiltered;
}

//aplicar criteria pattern
$provinciasFiltered = filtrarProvincias1($provincias, $comunidad, $nombre, $codigo);

require_once '04.009_view.php';

?>

