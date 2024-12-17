<?php

namespace core;

class Validator {

  /**
   * Verifica si una cadena cumple una longitud minima y maxima
   * @param $value
   * @param int $min : minima ongitud
   * @param $max : maxima longitud
   * @return bool: indica si cumple los criterios, en ese caso retorna True, y false en caso contrario
   */
  public static function string($value, int $min = 1, float $max = INF) {
    $value = $value ?? '';

    if (strlen(trim($value)) < $min) {
      return false;
    }

    if (strlen(trim($value)) > $max) {
      return false;
    }

    echo "maximo: $max";

    return true;
  }

  public static function email($value) {
    //Retorna False si no es un email, y el email si es correcto.
    $result = filter_var($value, FILTER_VALIDATE_EMAIL);
    if ($result) {
      //Si es correcto, retorna el email, ==> email es mayor de 0 longitud ==> es true
      return true;
    }

    return false;
  }


}
