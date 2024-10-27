/*
Elaborar estas funciones
-  `digitos(int $num): int`
-  `digitoN(int $num, int $pos): int`
-  `quitaPorDetras(int $num, int $cant): int`
-  `quitaPorDelante(int $num, int $cant): int`.
*/

<?php

function digitos(int $num): int {
  return strlen((string)$num);
}

function digitoN(int $num, int $pos): int {
  return (int)str_split((string)$num)[$pos];
}

function quitaPorDetras(int $num, int $cant): int {
  return (int)substr((string)$num, 0, -$cant);
}

function quitaPorDelante(int $num, int $cant): int {
  return (int)substr((string)$num, $cant);
}

?>