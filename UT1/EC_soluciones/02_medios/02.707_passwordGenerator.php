<?php
// Crea una función passwordGenerator que genere una contraseña aleatoria de por defecto 8 caracteres, 2 digitos, 1 caracter especial y el resto strLetras.
// La función recibirá 3 parámetros, longitud, digitos y especiales, y tendran los valores por defecto indicados.
// Para probar la función, genera al menos 3 contraseñas, y volcar con echo el resultado de cada llamada.

function passwordGenerator($longitud = 8, $digitos = 2, $especiales = 1)
{
    $strLetras = "abcdefghijklmnopqrstuvwxyz";
    $strNumbers = "0123456789";
    $strSpecials = "!@#$%&*";

    $password = "";

    $ttDigits=0;
    $ttEspeciales=0;

    do {

        $option = rand(1,3);

        switch ($option) {
            case 1: //Digito
                if ($ttDigits < $digitos) {
                    $numPos = rand(0,strlen($strNumbers) - 1);
                    $password.= $strNumbers[rand(0,strlen($strNumbers) - 1)];
                    $ttDigits++;
                }
                break;
            case 2: //Especial
                if ($ttEspeciales < $especiales) {
                    $password.= $strSpecials[rand(0,strlen($strSpecials) - 1)];
                    $ttEspeciales++;
                }
                break;
            default: //Letra
                $password.= $strLetras[rand(0,strlen($strLetras) - 1)];
                break;
        }
    } while (strlen($password) < $longitud);

    return $password;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 704</title>
</head>
<body>
<h3>Ejercicio Generador de Contraseña</h3>
<p>La contraseña generada es: <?= passwordGenerator() ?></p>
</body>
</html>