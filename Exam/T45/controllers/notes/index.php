<?php

use core\{App, Database};

$heading = "Notas";
global $globalUserId;

$db = App::resolve(Database::class);

$sql = "select * from notes where user_id = :userId";

$params = [
  ":userId" => $globalUserId,
];

$notes = $db->query($sql, $params)
  ->get();

view('notes/index.view.php',
  ['notes' => $notes, 'heading' => 'Notas']
);

?>
