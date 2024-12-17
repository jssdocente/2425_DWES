<?php

use core\{App, Database};

global $globalUserId;

$db = App::resolve(Database::class);

$id = $_POST['id'] ?? 0;

//dd("Eliminar producto",$_POST);

$item = $db->query('select * from products where id = :id', [':id' => $id])
  ->findOrFail();

$db->query('delete from products where id = :id', [':id' => $id]);

header('location: /products');
exit();
