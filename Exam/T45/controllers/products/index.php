<?php

use core\{App, Database};

$heading = "Productos";
global $globalUserId;

$db = App::resolve(Database::class);

$sql = "select * from Products";

$productos = $db->query($sql, [])
  ->get();

view('products/index.view.php',
  ['items' => $productos, 'heading' => 'Productos']
);

?>

