<?php
/*
  CONTROLADOR NOTA DETALLE
*/

use core\{Database, Validator};

$errors = [];

view('notes/create.view.php', ['heading' => 'Crear nueva nota', 'errors' => $errors]);


?>
