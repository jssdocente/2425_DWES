/*
Elaborar estas funciones
- esCapicua(int $num): bool
- esPrimo(int $num): bool
- siguientePrimo(int $num): int
*/

<?php

function esCapicua(int $num): bool {
  return $num == strrev($num);
}

function esPrimo(int $num): bool {
  if ($num < 2) {
    return false;
  }
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}

function siguientePrimo(int $num): int {
  $i = $num + 1;
  while (!esPrimo($i)) {
    $i++;
  }
  return $i;
}

?>