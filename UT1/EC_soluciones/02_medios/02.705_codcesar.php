<?php

const VOCABULARIO = "abcdefghijklmnñopqrstuvwxyz";

//Funciones con rotación, donde si la letra es la última, se reinicia al principio
function codificarCesar($texto, $desplazamiento = 3) {
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

function decodificarCesar($texto, $desplazamiento = 3) {
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

$texto = $_GET["texto"] ?? "Esto es una prueba";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplos codificación Cesar</title>
</head>
<body>
<h1>Ejemplos codificación Cesar</h1>
<h2>Rotación</h2>
<p>Texto original: <?= $texto ?></p>
<p style="color: blue">Texto codificado: "<?php echo codificarCesar($texto) ?>"</p>
<p style="color: red">Texto decodificado: "<?php echo decodificarCesar(codificarCesar($texto)) ?>"</p>
</body>
</html>