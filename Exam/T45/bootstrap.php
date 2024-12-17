<?php

use core\{App, Container, Database};

$container = new Container();

//Agrear la instancia de la base de datos al contenedor
$container->bind('core\Database', function () {
  $config = require base_path('config.php');

  return new Database($config);
});

App::setContainer($container);
