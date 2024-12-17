<?php

use core\{App, Database};

global $globalUserId;

$config = require base_path('config.php');
$db = App::resolve(Database::class);

$note = $db->query('select * from notes where id = :id', [
    'id' => $_POST['id']
])->findOrFail();

authorize($note['user_id'] === $globalUserId);

$db->query('delete from notes where id = :id', [
    'id' => $_POST['id']
]);

header('location: /notes');
exit();
