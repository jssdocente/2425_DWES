<?php

/*
 * Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos suman según el juego de la brisca.
 * Emplea un array asociativo para obtener los puntos a partir del nombre de la carta.
 * */

//Definición
$baraja = [
    "As" => 11,
    "Tres" => 10,
    "Rey" => 4,
    "Caballo" => 3,
    "Sota" => 2,
    "Siete" => 0,
    "Seis" => 0,
    "Cinco" => 0,
    "Cuatro" => 0,
    "Dos" => 0
];

//Generar 10 cartas aleatorias
foreach (range(1, 10) as $i) {
    $cartas[] = array_rand($baraja);
}

//Sumar puntos
$puntos = 0;
foreach ($cartas as $carta) {
    $puntos += $baraja[$carta];
}

?>

<main>
    <h3>511. Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos suman
        según el juego de la brisca.</h3>
    <h5>Cartas:</h5>
    <ul>
        <?php foreach ($baraja as $key => $value) : ?>
            <li><?= $key ?> (<?= $value ?>)</li>
        <?php endforeach; ?>
    </ul>
    <p>Cartas: <?= implode(", ", $cartas) ?></p>
    <p>Puntos: <?= $puntos ?></p>
</main>
