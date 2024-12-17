<?php
/*
  CONTROLADOR NOTA DETALLE
*/

use core\{App, Database};

global $globalUserId;

$db = App::resolve(Database::class);

//PETICION GET

//Obtener el ID de la nota
$id = $_GET['id'] ?? 0;

//Obtener el recurso de la BD
$item = $db->query("select * from Products where id = :id", [":id" => $id])
  ->findOrFail();

//HAPPY PATH
view('products/show.view.php',
  ['heading' => 'Producto', 'item' => $item]);


?>
