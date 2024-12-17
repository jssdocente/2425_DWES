<?php
/*
  CONTROLADOR NOTA DETALLE
*/

use core\{Database, Validator};

$errors = [];

view('products/create.view.php', ['heading' => 'Crear nuevo producto', 'errors' => $errors]);


?>
