<!-- Juego del calamar.
Crea un array asociativo, para simular que 10 personas compran un boleto de loteria entre 1-100 números. Cada persona comprará un número aleatorio, y no se pueden repetir.
El programa debe ejecutarse hasta que haya un único ganador, que será el que quede en pie.
El programa irá obteniedo números de 1-100, simulando que se extraen del bombo. Si el número extraido coincide con el número de algún j, este quedará eliminado, sino se volverá a tirar. Ganará el último Jugador.
-->

<?php

// Definir jugadores
$jugadores = [
    "J1" => [
        "nombre" => "J1",
        "numero" => 0,
        "eliminado" => false
    ]
];

foreach (range(1, 10) as $i) {
    $jugadores["J$i"] = [
        "nombre" => "J$i",
        "numero" => 0,
        "eliminado" => false
    ];
};

// Extraer números y asignarlos a los jugadores
// Saber qué numeros ya se han extraido, y si ese numero ya se ha extraido, volver a tirar
$numBoletos = [];

foreach (range(1, 10) as $i) {
    $key = "J$i";
    $numBoleto = rand(1, 100);
    //calcula un número aleatorio que no se haya extraido
    do {
        $numBoleto = rand(1, 100);
    } while (in_array($numBoleto, $numBoletos));

    //agrego el número extraido al array de números extraidos
    $numBoletos[] = $numBoleto;

    //asigno el número extraido al j
    $jugadores[$key]["numero"] = $numBoleto;
}

?>
<head>
    <style>
        .eliminado {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
<h1>Juego del calamar</h1>
<h3>Comienza el sorteo...</h3>
<h3>Números asignados a los Jugadores</h3>
<ul>
    <?php foreach ($jugadores as $j => $infoJugador) : ?>
        <li><?= $j ?>: <?= $infoJugador["numero"] ?></li>
    <?php endforeach; ?>
</ul>

<h3>Comienza el Juego...</h3>

<?php
// Notas importantes:
// - No se pueden extraer del bombo de números que ya se han extraido => Si un nº ya se ha extraido, se vuelve a tirar
$bolasExtraidas = [];
$ganador = "";
$enPie = count($jugadores);

while ($enPie > 1) {
    //Solo se extraen números que no se hayan extraido
    do {
        $numExtraido = rand(1, 100);
    } while (in_array($numExtraido, $bolasExtraidas));

    $bolasExtraidas[] = $numExtraido;

    echo "<p>Ha salido el número: $numExtraido</p>";

    foreach ($jugadores as $jugadorKey => $infoJugador) {
        if ($infoJugador["numero"] == $numExtraido) {
            $jugadores[$jugadorKey]["eliminado"] = true;
            $enPie-=1;
            echo "<p class='eliminado'>El $jugadorKey ha sido eliminado</p>";
        }
    }
}

//Se filtra aquel jugador que no hay sido eliminado.
$ganadores = array_filter($jugadores, fn($jugador) =>  !$jugador["eliminado"]);

//Solo debe quedar uno, pero me aseguro obteniendo el primer elemento
$ganador = current($ganadores);

echo "<h2>El ganador es: {$ganador['nombre']}</h2>";