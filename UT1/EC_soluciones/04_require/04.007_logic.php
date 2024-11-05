<?php

$name = $_POST['nombre'] ?? '';
$direccion = $_POST['direccion'] ?? '';
$email = $_POST['email'] ?? '';
$telefono = $_POST['telefono'] ?? '';

if (empty($name)) {
    $errors[] = 'Debe introducir un nombre válido';
}
if (empty($direccion)) {
    $errors[] = 'Debe introducir una dirección válida';
}

if (empty($email)) {
    $errors[] = 'Debe introducir un email válido';
}

if (empty($telefono)) {
    $errors[] = 'Debe introducir un telefono válido';
}

//var_dump($errors);

if (!empty($errors)) {
    require_once '04.007_form.php';
    exit;
}

require_once '04.007_view.php';

?>

