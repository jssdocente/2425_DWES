<?php

use core\{App, Database, Validator};

global $globalUserId;

$db = App::resolve(Database::class);

$id = $_POST['id'];

//var_dump("Actualizar producto", $_POST);

// find the corresponding note
$item = $db->query('select * from products where id = :id', [':id' => $id])
  ->findOrFail();

// validate the form
$errors = [];

$name = $_POST['name'] ?? '';
$category = $_POST['category'] ?? '';

if (!Validator::string($name)) {
  $errors['name'] = "Nombre no puede ser vacio";
}

if (!Validator::string($category, max: 25)) {
  $errors['category'] = "Categoría no puede ser vacio ni mayor de 25 caracteres";
}

// if no validation errors, update the record in the products database table.
if (count($errors)) {
//  var_dump($errors);
  view('products/edit.view.php', [
    'heading' => 'Editar Producto',
    'errors' => $errors,
    'item' => [...$item, 'name' => $name, 'category' => $category]
  ]);

  return;
}

$db->query('update products set name = :name, category= :category where id = :id',
  [
    ':id' => $_POST['id'],
    ':name' => $_POST['name'],
    ':category' => $_POST['category']
  ]);

// redirect the user
header('location: /products');
die();
