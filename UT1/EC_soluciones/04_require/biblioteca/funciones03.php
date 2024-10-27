<?php

function contarLetrasPosicionImpar(string $cadena): int {
    $contador = 0;
    for ($i = 0; $i < strlen($cadena); $i++) {
        if ($i % 2 != 0) {
            $contador++;
        }
    }

    return $contador;
}

function contarVocales(string $cadena): array {
    $vocales = ["a" => 0, "e" => 0, "i" => 0, "o" => 0, "u" => 0];
    for ($i = 0; $i < strlen($cadena); $i++) {
        $letra = strtolower($cadena[$i]);
        if (array_key_exists($letra, $vocales)) {
            $vocales[$letra]++;
        }
    }

    return $vocales;
}

const CONSONANTES = "bcdfghjklmnñpqrstvwxyz";
const VOCALES = "aeiou";

function analizador(string $cadena): array {
    $resultado = [
        "palabras" => str_word_count($cadena),
        "letras" => strlen($cadena),
        "vocales" => 0,
        "consonantes" => 0,
        "espacios" => substr_count($cadena, " ")
    ];

    for ($i = 0; $i < strlen($cadena); $i++) {
        $letra = strtolower($cadena[$i]);
        //usa la función strpos para buscar la letra en la cadena de consonantes
        if (str_contains(VOCALES, $letra)) {
            $resultado["vocales"]++;
        } elseif (str_contains(CONSONANTES, $letra)) {
            $resultado["consonantes"]++;
        }

    }

    return $resultado;
}

function esPalindromo(string $cadena): bool {
    $cadena = strtolower($cadena);
    $cadena = str_replace(" ", "", $cadena);
    $cadenaInvertida = strrev($cadena);
    return $cadena === $cadenaInvertida;

}

?>