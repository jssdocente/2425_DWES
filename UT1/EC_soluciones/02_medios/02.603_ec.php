<!-- REaliza la siguiente función:
Una función dolar2euro(float $dolares): float que convierta una cantidad de dólares a euros. La función recibirá un parámetro que será el factor de conversión. En caso de que no se indique nada, aplicar el siguiente factor (1.08).
La misma función, pero que convierta de euros a dólares.
Prueba las funciones anteriores probando con diferentes cantidades y factores de conversión.
  -->


<?php

function dolar2euro(float $dolares, $factor = 1.08) {
  return $dolares * $factor;
}

function euro2dolar(float $euros, $factor = 1.08, $round = 2) {
  return round($euros / $factor, $round);
}

?>

<body>
  <h1>UT2. Ejercicio 602</h1>
  <p>La conversión de 100 dólares a euros es: <?= dolar2euro(100); ?></p>
  <p>La conversión de 100 euros a dólares es: <?= euro2dolar(100); ?></p>
</body>


