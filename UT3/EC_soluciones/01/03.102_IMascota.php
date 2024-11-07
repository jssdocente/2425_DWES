<?php

namespace UT3\EC01\N101;

use UT3\EC01\N101\{IMascota, Perro, Canario};

require_once '03.101_Animal-jerarquia.php';

class Main {
    public static function mostrarMascota(IMascota $mascota): string {
        return "La {$mascota->acariciar()} y {$mascota->jugar()}" . '<br>';
    }
}


$perro = new Perro("Toby", 5, "Pastor Alemán");
$canario = new Canario("Piolín", 1, "Canario", "Amarillo");

echo Main::mostrarMascota($perro);
echo Main::mostrarMascota($canario);







