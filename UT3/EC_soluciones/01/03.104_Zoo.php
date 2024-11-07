<?php

namespace UT3\EC01\N104;

use UT3\EC01\N101\{Animal, Mamifero, IMascota, IClonar, Ave, Perro, Canario, Pinguino, Gato};

require_once '03.101_Animal-jerarquia.php';


class Zoo {

    /**
     * @var array<Animal>
     */
    private array $animals;

    public function addAnimal(Animal $animal): void {
        $this->animals[] = $animal;
    }

    public function getAnimales(): array {
        return array_filter($this->animals, fn($animal) => $animal);
    }

    public function getAves(): array {
        return array_filter($this->animals, fn($animal) => $animal instanceof Ave);
    }

    public function getMamiferos(): array {
        return array_filter($this->animals, fn($animal) => $animal instanceof Mamifero);
    }

    public function getMascotas(): array {
        return array_filter($this->animals, fn($animal) => $animal instanceof IMascota);
    }

    public function getClonables(): array {
        return array_filter($this->animals, fn($animal) => $animal instanceof IClonar);
    }
}

$zoo = new Zoo();

$zoo->addAnimal(new Perro("Toby", "M", "Pastor Alemán"));
$zoo->addAnimal(new Perro("Bobby", "M", "Pastor Alemán"));
$zoo->addAnimal(new Canario("Piolín", "M", "Canario", "Amarillo"));
$zoo->addAnimal(new Pinguino("Tux", "H", "Pingüino", "Negro y Blanco"));
$zoo->addAnimal(new Gato("Rufian", "M", 4,));
$zoo->addAnimal(new Canario("Sinfoni", "H", "Canario", "Amarillo-negro"));

$animales = $zoo->getAnimales();
$mamiferos = $zoo->getMamiferos();
$aves = $zoo->getAves();
$mascotas = $zoo->getMascotas();
$clonables = $zoo->getClonables();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ejercicio 104.Zoo</title>
</head>
<body>
<h3>Zoo de animales</h3>
<h4>Todos los mamiferos</h4>
<ul>
    <?php foreach ($mamiferos as $animal) : ?>
        <li><?= $animal ?></li>
    <?php endforeach; ?>
</ul>
<hr>
<h4>Todos las aves</h4>
<ul>
    <?php foreach ($aves as $animal) : ?>
        <li><?= $animal ?></li>
    <?php endforeach; ?>
</ul>
<h4>Todos las Mascotas</h4>
<ul>
    <?php foreach ($mascotas as $animal) : ?>
        <li><?= $animal ?></li>
    <?php endforeach; ?>
</ul>
<h4>Todos las Clonables</h4>
<ul>
    <?php foreach ($clonables as $animal) : ?>
        <li><?= $animal ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>














