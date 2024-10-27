<?php

$dolares = $_GET['dolares'] ?? '';
$cambio = $_GET['cambio'] ?? '';

if (empty($dolares)) {
    $errors['dolares'] = 'Debe introducir una cantidad de dólares';
}
if (empty($cambio)) {
    $errors['cambio'] = 'Debe introducir un cambio';
}

if (!empty($errors)) {
    require_once '04.008_form.php';
    exit;
}

require_once '04.008_view.php';

?>

