<!-- Crea las siguientes funciones:
Una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max().
Una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador ... . -->


<?php

function mayor() {
    if (func_num_args() == 0) {
        return 0;
    }

    $mayor = 0;
    foreach (func_get_args() as $num) {
        if ($num > $mayor) {
            $mayor = $num;
        }
    }

    return $mayor;
}


function concatenar(...$palabras) {
    $resultado = "";
    foreach ($palabras as $palabra) {
        $resultado .= $palabra . " ";
    }

    return $resultado;
}

//Calcular aleatoriamente números entre 0 y 1000
foreach (range(0, 9) as $i) {
    $numeros[] = rand(0, 100);
}

?>

<body>
<h1>Ejercicio 601</h1>
<p>Los numeros son los siguientes: <?= implode(", ", $numeros) ?></p>
<p>El mayor de los números es: <?php echo mayor(...$numeros); ?></p>
<p>La concatenación de las palabras es: <?php echo concatenar("Hola", "que", "tal", "estás"); ?></p>
</body>


