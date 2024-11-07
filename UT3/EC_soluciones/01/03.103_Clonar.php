<?php

namespace UT3\EC01\N103;

use UT3\EC01\N101\{Perro};

require_once '03.101_Animal-jerarquia.php';

$perro = new Perro("Toby", 5, 4, "Pastor Alemán");
//
$perroClonado = $perro->clonar();
echo "Perro clonado: {$perroClonado->clonar()}";









