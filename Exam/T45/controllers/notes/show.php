<?php
/*
  CONTROLADOR NOTA DETALLE
*/

use core\{App, Database};

global $globalUserId;

$heading = "Nota";

$db = App::resolve(Database::class);

//PETICION GET

//Obtener el ID de la nota
$notaId = $_GET['id'] ?? 0;

//Obtener la Nota de la BD
$sql = "select * from notes where id = :notaId";

//obtiene el recurso o aborta
$note = $db->query("select * from notes where id = :notaId", [":notaId" => $notaId])
  ->findOrFail();

//comprueba si la nota pertecene al usuario logado
authorize($note['user_id']);

//HAPPY PATH
view('notes/show.view.php',
  ['heading' => 'Nota', 'note' => $note]);


?>
