<?php
//503. De forma aleatoria, obtén 10 nombres de personas, y otro con 10 apellidos. Crea un array asociativo con los nombres y apellidos, y muéstralo por pantalla, indicando el nombre y apellido de cada persona.

$nombres = ['Juan', 'Pedro', 'Luis', 'Ana', 'Maria', 'Sara', 'Lucia', 'Pablo', 'Carlos', 'Javier'];
$apellidos = ['Garcia', 'Lopez', 'Martinez', 'Sanchez', 'Perez', 'Gonzalez', 'Fernandez', 'Rodriguez', 'Lopez', 'Gomez'];

$personas = [];

// De forma aleatoria, obtén 10 nombres de personas, y otro con 10 apellidos
foreach (range(0, 9) as $i) {
    $personas[$nombres[rand(0, count($nombres) - 1)]] = $apellidos[rand(0, count($apellidos) - 1)];
}

// Crea un array asociativo con los nombres y apellidos, y muéstralo por pantalla, indicando el nombre y apellido de cada persona
?>

<main>
    <h1>503. De forma aleatoria, obtén 10 nombres de personas, y otro con 10 apellidos</h1>
    <ul>
        <?php foreach ($personas as $nombre => $apellido) : ?>
            <li><?= $nombre ?> <?= $apellido ?></li>
        <?php endforeach; ?>
    </ul>
</main>




