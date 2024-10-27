<?php
declare(strict_types=1);
// REaliza la siguiente función:
// - digitos(int $num): int → devuelve la cantidad de dígitos de un número.
// - digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
// - quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.
// - quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.

// Para probar las funciones, haz uso tanto de paso de argumentos posicionales como argumentos con nombre.

function digitos(int $num): int {
    return strlen((string)$num);
}

function digitoN(int $num, int $pos): int {
    $num = (string)$num;

    return (int)$num[$pos - 1];
}

function quitaPorDetras(int $num, int $cant): int {
    $strNum = (string)$num;

    return (int)substr($strNum, 0, strlen($strNum) - $cant);
}

function quitaPorDelante(int $num, int $cant): int {
    $strNum = (string)$num;

    return (int)substr($strNum, $cant);
}

$num = rand(1000, 999999);

?>

<body>
<h1>Ejercicio 603</h1>
<p>La cantidad de dígitos de "<?= $num ?>" es: <?= digitos($num); ?></p>
<p>El dígito que ocupa la posición 3 en "<?= $num ?>" es: <?= digitoN($num, 3); ?></p>
<p>Quitando 2 dígitos por detrás a "<?= $num ?>" obtenemos: <?= quitaPorDetras($num, 2); ?></p>
<p>Quitando 2 dígitos por delante a "<?= $num ?>" obtenemos: <?= quitaPorDelante($num, 2); ?></p>
</body>


