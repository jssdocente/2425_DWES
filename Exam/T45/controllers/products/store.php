<?php

use core\{App, Validator, Database};
global $globalUserId;

$db = App::resolve(Database::class);

//Validation
$errors = [];

$name = $_POST['name'] ?? '';
$category = $_POST['category'] ?? '';

//dd("crear producto",$_POST);

if (!Validator::string($name)) {
  $errors['name'] = "Nombre no puede ser vacio";
}

if (!Validator::string($category, min: 5, max: 20)) {
  $errors['category'] = "Categoria no puede ser vacia ni mayor de 20 caracteres";
}

if (!empty($errors)) {
   view("products/create.view.php", [
    'heading' => 'Nuevo producto',
    'errors' => $errors,
    'item' => ['name' => $name, 'category' => $category]
  ]);
  return;
}

//No hay errores de validación
$db->query('INSERT INTO products (name,category) VALUES (:name,:category)',
  [
    ':name' => $name,
    ':category' => $category,
  ]);

//Ir a algún lugar si la nota se ha creado bien
header("Location: /products");

