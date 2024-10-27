<!-- 
Crea una función que reciba 3 argumentos, a, b y c, y devuelva la suma de los 3.
Asigna un valor por defecto a c de 10 y b de 15.
Llama a la función de tres maneras distintas:

Pasando los mínimos argumentos necesarios.
Pasando argumentos a y b, y omitiendo c.
Pasando argumentos a y c, y omitiendo b.
Pasando los tres argumentos, pero en distinto orden, primero c, luego a y por último b.
Ejecuta las llamadas a las funciones, en una expresión dentro de un párrafo <p>, mostrando el resultado de cada llamada, en indicando en el mensaje el tipo de llamada realizada.
  -->

<?php

function suma($a, $b = 15, $c = 10) {
    return $a + $b + $c;
}

?>

<body>
<h1>Ejercicio 608</h1>
<p>La suma de los 3 números,( pasando los mínimos argumentos necesarios) = <?= suma(1); ?> > suma(1)</p>
<p>La suma de los 3 números es: (Pasando argumentos a y b, y omitiendo c.) = <?= suma(1, 2); ?> > suma(1,2)</p>
<p>La suma de los 3 números es: (Pasando argumentos a y c, y omitiendo b.) =<?= suma(1, c: 2); ?> > suma(1,c:2)</p>
<p>La suma de los 3 números es: (Pasando los tres argumentos, pero en distinto orden) = <?= suma(c: 3, b: 2, a: 1); ?> >
    suma(c:3, b:2, a:1)</p>
</body>
