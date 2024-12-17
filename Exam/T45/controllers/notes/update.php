<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

global $globalUserId;

$id = $_POST['id'];

// find the corresponding note
$note = $db->query('select * from notes where id = :id', [':id' => $id])
  ->findOrFail();

// authorize that the current user can edit the note
authorize($note['user_id'] === $globalUserId);

// validate the form
$errors = [];

$title = $_POST['title'] ?? '';
$body = $_POST['body'] ?? '';

if (!Validator::string($title)) {
  $errors['title'] = "Titulo no puede ser vacio";
}

if (!Validator::string($body, max: 25)) {
  $errors['body'] = "Body no puede ser vacio ni mayor de 25 caracteres";
}

// if no validation errors, update the record in the notes database table.
if (count($errors)) {
  view('notes/edit.view.php', [
    'heading' => 'Editar Nota',
    'errors' => $errors,
    'note' => $note
  ]);

  return;
}

$db->query('update notes set body = :body where id = :id',
  [
    ':id' => $_POST['id'],
    ':body' => $_POST['body']
  ]);

// redirect the user
header('location: /notes');
die();
