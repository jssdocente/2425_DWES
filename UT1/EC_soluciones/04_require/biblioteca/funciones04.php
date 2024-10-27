<?php

const VOCABULARIO = "abcdefghijklmnopqrstuvwxyz";

//Funciones con rotación, donde si la letra es la última, se reinicia al principio
function codificarCesar($texto, $desplazamiento = 3): string {
    $vocabularioDesplazado = substr(VOCABULARIO, $desplazamiento) . substr(VOCABULARIO, 0, $desplazamiento);
    // echo "<br>" . VOCABULARIO . "<br>";
    //echo $vocabularioDesplazado . "<br>";

    $longitud = strlen($texto);
    $codificado = "";

    for ($i = 0; $i < $longitud; $i++) {
        $posicion = strpos(VOCABULARIO, $texto[$i]);
        if ($posicion === false) {
            $codificado .= $texto[$i];
            continue;
        }
        $codificado .= $vocabularioDesplazado[$posicion];
    }

    return $codificado;
}

function decodificarCesar($texto, $desplazamiento = 3): string {
    $vocabularioDesplazado = substr(VOCABULARIO, $desplazamiento) . substr(VOCABULARIO, 0, $desplazamiento);

    $longitud = strlen($texto);
    $decodificado = "";

    for ($i = 0; $i < $longitud; $i++) {
        $posicion = strpos($vocabularioDesplazado, $texto[$i]);
        if ($posicion === false) {
            $decodificado .= $texto[$i];
            continue;
        }
        $decodificado .= VOCABULARIO[$posicion];
    }

    return $decodificado;
}

function convertirFraseCani($frase): string {
    $frase = strtolower($frase);

    foreach (str_split($frase) as $pos => $letra) {
        if (ctype_punct($letra)) {
            continue;
        }

        if ($pos % 2 == 0) {
            $frase[$pos] = strtoupper($letra);
        }
    }
    return $frase;
}