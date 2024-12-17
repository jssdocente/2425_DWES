<?php

use core\{App, Validator, Database};
global $globalUserId;

$db = App::resolve(Database::class);

//Validation
$errors = [];

$title = $_POST['title'] ?? '';
$body = $_POST['body'] ?? '';

if (!Validator::string($title)) {
  $errors['title'] = "Titulo no puede ser vacio";
}

if (!Validator::string($body, max: 25)) {
  $errors['body'] = "Body no puede ser vacio ni mayor de 25 caracteres";
}

if (!empty($errors)) {
   view("notes/create.view.php", [
    'heading' => 'Nueva Nota',
    'errors' => $errors
  ]);
  return;
}

//No hay errores de validación
$db->query('INSERT INTO notes (title,body, user_id) VALUES (:title,:body, :user_id)',
  [
    'title' => $title,
    'body' => $body,
    'user_id' => $globalUserId
  ]);

//Ir a algún lugar si la nota se ha creado bien
header("Location: /notes");

