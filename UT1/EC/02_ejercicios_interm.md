# 02. Ejercicios nivel intermedio en PHP

Estos ejercicios están pensados para que puedas practicar y afianzar los conocimientos adquiridos en este tema.

### Entrega

Normas de entrega:

- Cada ejericio se entregará en un archivo independiente, con el formato `02.XXX_ejercicio.php`, donde `XX` será el número del ejercicio.  (Ejemplo: `02.001_ejercicio.php`).
- Se guardarán dentro de la estructura de carpetas del tema `UT2`, carpeta ejercicios `EC`y `02_medios`. En la ruta `UT2\EC\02_medios\`.
- No es necesario entregarlos como tarea, pero si es necesario realizarlos, y se preguntarán aleatoriamente en clase.


## Ejercicios

Recursos:

Copia estos arrays en un archivo `02_basicos_recursos.php` para poder utilizarlos en los ejercicios.

```php	
//Nombres persona
$names = ['Juan', 'Pedro', 'Luis', 'Ana', 'Maria', 'Rosa', 'Lucia', 'Sara', 'Pablo', 'Carlos', 'Javier', 'David', 'Marta', 'Elena', 'Carmen', 'Rocio', 'Isabel', 'Laura', 'Sonia', 'Eva', 'Cristina', 'Raquel', 'Nuria', 'Teresa', 'Silvia', 'Beatriz', 'Patricia', 'Lorena', 'Natalia', 'Ines', 'Celia', 'Alba', 'Clara', 'Alicia', 'Lola', 'Esther', 'Julia', 'Mercedes', 'Gloria', 'Concha', 'Dolores', 'Victoria', 'Aurora', 'Amparo', 'Rafaela', 'Rosario', 'Jose, 'Antonio', 'Manuel', 'Francisco', 'David'];

//Apellidos
$surnames = ['Garcia', 'Fernandez', 'Lopez', 'Martinez', 'Sanchez', 'Perez', 'Gomez', 'Martin', 'Jimenez', 'Ruiz', 'Hernandez', 'Diaz', 'Moreno', 'Alvarez', 'Romero', 'Alonso', 'Gutierrez', 'Navarro', 'Torres', 'Dominguez', 'Vazquez', 'Ramos', 'Gil', 'Ramirez', 'Serrano', 'Blanco', 'Molina', 'Morales', 'Ortega', 'Delgado', 'Castro', 'Ortiz', 'Rubio', 'Marin', 'Sanz', 'Iglesias', 'Nuñez', 'Medina', 'Garrido', 'Cortes', 'Redondo', 'Calvo', 'Arias', 'Guerrero', 'Fuentes', 'Cabrera', 'Reyes', 'Pascual', 'Santos', 'Herrero'];

//Ciudades
$cities = ['Madrid', 'Barcelona', 'Valencia', 'Sevilla', 'Zaragoza', 'Malaga', 'Murcia', 'Palma de Mallorca', 'Las Palmas de Gran Canaria', 'Bilbao', 'Alicante', 'Cordoba', 'Valladolid', 'Vigo', 'Gijon', 'Hospitalet de Llobregat', 'Vitoria', 'La Coruña', 'Granada', 'Elche', 'Oviedo', 'Badalona', 'Cartagena', 'Terrassa', 'Jerez de la Frontera', 'Sabadell', 'Mostoles', 'Santa Cruz de Tenerife', 'Pamplona', 'Alcala de Henares', 'Fuenlabrada', 'Almeria', 'San Sebastian', 'Leganes', 'Castellon de la Plana', 'Burgos', 'Alcorcon', 'Salamanca', 'Albacete', 'Getafe', 'Logroño', 'San Cristobal de la Laguna', 'Badajoz', 'Huelva', 'Leon', 'Tarragona', 'Cadiz', 'Lleida', 'Marbella', 'Mataro', 'Dos Hermanas'];

//Paises
$countries = ['España', 'Francia', 'Italia', 'Alemania', 'Reino Unido', 'Rusia', 'Turquia', 'Holanda', 'Suiza', 'Suecia', 'Polonia', 'Austria', 'Belgica', 'Noruega', 'Dinamarca', 'Finlandia', 'Grecia', 'Portugal', 'Irlanda', 'Ucrania', 'Hungria', 'Republica Checa', 'Rumania', 'Bulgaria', 'Serbia', 'Croacia', 'Eslovenia', 'Eslovaquia', 'Lituania', 'Letonia', 'Estonia', 'Chipre', 'Malta', 'Luxemburgo', 'Andorra', 'Liechtenstein', 'Monaco', 'San Marino', 'Vaticano', 'Islandia', 'Montenegro', 'Macedonia', 'Albania', 'Bosnia-Herzegovina', 'Kosovo', 'Moldavia', 'Armenia', 'Georgia', 'Azerbaiyan', 'Kazajistan', 'Uzbekistan'];

//Aleatorios entre 1 y 100
$arrAleatorios = array_map(function($n) { return rand(1, 100); }, range(1, 100));

```

### Bloque 5

### Arrays

500. Realiza los siguientes ejercicios

Teniendo el siguiente array: `$array = [1, 2, 4, 5, 6, 7, 8, 9];`

- Agrega el número 10 al final del array y muestra el resultado.
- Agrega el número 0 al principio del array y muestra el resultado.
- Agrega el número 11 en la posición 3 del array y muestra el resultado.
- Reemplaza el número en la posición 5 por el número 50 y muestra el resultado.

501. Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego muéstralo en una lista desordenada (ul). Para crear un número aleatorio, utiliza la función `rand(inicio, fin)`. Por ejemplo:

```php	
<!doctype html>
<html>
<head>
  <title>Ejercicio 1</title>
</head>
<body>
  <?php
  // Código PHP
  ?>
</body>
```

502. Rellena un array de 100 elementos de manera aleatoria con valores de `M` y `F`. Una vez completado vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo `[ 'M' => 0, 'F' => 0 ]` (no utilices variables para contar los elementos). Al final muestra el resultado por pantalla.


503. De forma aleatoria, obtén 10 nombres de personas, y otro con 10 apellidos. Crea un array asociativo con los nombres y apellidos, y muéstralo por pantalla, indicando el nombre y apellido de cada persona.


504. Dados los siguientes arrays, combinalos en un único array plano, intercalando los elementos de ambos. Muestra el resultado por pantalla. Si un array tiene más elementos que otro, añade los elementos restantes al final del array resultante.
(Hazlo sin utilizar ninguna función de PHP)     

```php
[1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j']
```

505. Escribe un programa que genere 10 números aleatorios y que luego muestre los números introducidos junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
     

506. Escribe un programa que solicite que realice lo siguiente:
     - Solicite una frase por teclado.  ([¿Cómo leer datos por teclado?](https://parzibyte.me/blog/2021/08/19/php-leer-datos-teclado/))
     - Solicite un número para el desplazamiento de los caracteres.
     - Reemplace los espacios por `_'.
     - Que almacene cada caracter en un array
     - Y que aplique la rotación indicada en el número introducido. Es decir el nº de la posición 0, debe pasar a la posición 1, el de la 1 a la 2, etc.. el de la ultima posición debe pasar a la posición 0.Finalmente, muestra el contenido del array.

     Finalmente, muestra la información de la frase original, y la frase con la rotación aplicada.


507. Basado en el ejercicio anterior, escribe un programa que solicite que realice lo siguiente:
     - Solicite una frase por teclado.
     - Solicite un número para el desplazamiento de los caracteres. (Solo positivos)
     - Reemplace los espacios por `_'.
     - Que almacene cada caracter en un array
     - Y que aplique la rotación indicada en el número introducido. Es decir el nº de la posición 0, debe pasar a la posición 1, el de la 1 a la 2, etc.. el de la ultima posición debe pasar a la posición 0.Finalmente, muestra el contenido del array.

        Finalmente, muestra la información de la frase original, y la frase con la rotación aplicada.

508. Basado en el ejercicio anterior, escribe un programa que solicite que realice lo siguiente:
     - Solicite una frase por teclado.
     - Solicite un número para el desplazamiento de los caracteres. (Puede ser positivo y negativo)
     - Reemplace los espacios por `_'.
     - Que almacene cada caracter en un array
     - Y que aplique la rotación indicada en el número introducido. Es decir el nº de la posición 0, debe pasar a la posición 1, el de la 1 a la 2, etc.. el de la ultima posición debe pasar a la posición 0.Finalmente, muestra el contenido del array.

        Finalmente, muestra la información de la frase original, y la frase con la rotación aplicada.

509. Escribe un programa que genere 50 números aleatorios del 0 al 20 y que los muestre por pantalla separados por espacios y generará una lista ordenada. A continuación, el programa pedirá por teclado 2 valores y a continuación cambiará todas las ocurrencias del primer valor por el segundo, mostrandose los números que han cambiado en un color <em style="color: red">diferente</em>.

510. Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del array (del 0 en adelante) y todos los números impares a las celdas restantes. Muestra el array resultante con un `print_r()`.

511. Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos suman según el juego de la brisca. Emplea un array asociativo para obtener los puntos a partir del nombre de la carta. 
     
     |Carta|Puntos|
      |---|---|
      |As|11|
      |Tres|10|
      |Rey|4|
      |Caballo|3|
      |Sota|2|
      |Resto de cartas|0|
      
      
     Muestra las cartas obtenidas, y los puntos obtenidos.
      

512. *Juego del calamar.* <br>
Crea un array asociativo, para simular que 10 personas compran un boleto de loteria entre 1-100 números. Cada persona comprará un número aleatorio, y no se pueden repetir. <br>
El programa debe ejecutarse hasta que haya un único ganador, que será el que quede en pie. <br>
El programa irá obteniedo números de 1-100, simulando que se extraen del bombo. Si el número extraido coincide con el número de algún jugador, este quedará eliminado, sino se volverá a tirar. Ganará el último Jugador. <br>

Por cada ronda, se mostrará la siguiente información:

- Número extraido
- Lista de los números extraidos.
- No hay jugador con ese número o Jugador eliminado. (Quedan X jugadores)
  
Al final, se mostrará el jugador ganadory el número del jugador que lo tiene.



### Funciones

600. Crea las siguientes funciones:

  - `esPar(int $num)`: Devuelve `true` si el número es par, `false` en caso contrario.
  - Una función que devuelva un array de tamaño `$tam` con números aleatorios comprendido entre $min y $max : `arrayAleatorio(int $tam, int $min, int $max)` : array.
  - Una función que reciba un `$array` por referencia y devuelva la cantidad de números pares que contiene.<br>
  `arrayPares(array &$array): int`


601. Crea las siguientes funciones:
     
  - Una función que devuelva el mayor de todos los números recibidos como parámetros: function `mayor(): int`. Utiliza las funciones `func_get_args()`, etc... No puedes usar la función `max()`.
  - Una función que concatene todos los parámetros recibidos separándolos con un espacio: `function concatenar(...$palabras) : string`. Utiliza el operador `...` . 
  
602. Desarrolla las siguientes funciones:

  -  `digitos(int $num): int` → devuelve la cantidad de dígitos de un número.
  - `digitoN(int $num, int $pos): int` → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
  - `quitaPorDetras(int $num, int $cant): int` → le quita por detrás (derecha) $cant dígitos.
  - `quitaPorDelante(int $num, int $cant): int` → le quita por delante (izquierda) $cant dígitos.

  Para probar las funciones, haz uso tanto de paso de argumentos posicionales como argumentos con nombre.

---

603. Crea las siguientes funciones:

  - Una función `dolar2euro(float $dolares): float` que convierta una cantidad de dólares a euros. La función recibirá un parámetro que será el factor de conversión. En caso de que no se indique nada, aplicar el siguiente factor (1.08).
  - La misma función, pero que convierta de euros a dólares.
  - Prueba las funciones anteriores probando con diferentes cantidades y factores de conversión.


604. Refactoriza el ejercicio anterior, copiando las funciones en un archivo `02.604_funciones.php`, y creando un archivo `02.604_index.php` que las incluya y las pruebe (copiado del ejercicio anterior).


605. Basaso en el ejercico anterior, utiliza los archivos `02.604_funciones.php` y rescata los valores de los parámetros de la URL, para que puedan ser pasados como parámetros a las funciones. Existen 2 parámetros: `moneda`, `cantidad` y factor de conversión `factor` (este valor puede ser opcional). <br>
     
      Por ejemplo: `http://localhost/02.605_index.php?moneda=dolar&cantidad=100&factor=1.08` o `http://localhost/02.605_index.php?moneda=euro&cantidad=100`

      La página mostrará el resultado de la conversión, indicando `100 dolares son 108 euros a un factor de conversión de 1.08` o `100 euros son 92.59 dolares a un factor de conversión de 1.08`.


606. Número de argumentos variables.
     
     Crea una función que reciba un número variable de argumentos y concatenalos juntos, separados por `,`. Devolver la cadena resultante.<br>
     Utiliza la función `func_get_args()` para obtener los argumentos. <br>
     Muestra la cadena resultante en un párrafo `<p>`. <br>
      > Ejemplo: `concatenar('Hola', 'Mundo', 'desde', 'PHP')` → `Hola, Mundo, desde, PHP`


607. Basado en el ejercicio anterior, crea otra función con el nombre `concatenarVariadics`, utilizando el operador `...` para obtener los argumentos. <br>
      > Ejemplo: `concatenarVariadics('Hola', 'Mundo', 'desde', 'PHP')` → `Hola, Mundo, desde, PHP`  (Para más info consulta este [articulo](https://flatcoding.com/tutorials/php-programming/php-variadic-functions/))


608. Argumentos con nombre.
     
     Crea una función que reciba 3 argumentos, `a`, `b` y `c`, y devuelva la suma de los 3. <br>
     Asigna un valor por defecto a `c` de 10 y `b` de 15.<br>
     Llama a la función de tres maneras distintas:
      - Pasando los mínimos argumentos necesarios.
      - Pasando argumentos a y b, y omitiendo c.
      - Pasando argumentos a y c, y omitiendo b.
      - Pasando los tres argumentos, pero en distinto orden, primero `c`, luego `a` y por último `b`.

     Ejecuta las llamadas a las funciones, en una expresión dentro de un párrafo `<p>`, mostrando el resultado de cada llamada, en indicando en el mensaje el tipo de llamada realizada.


609. Crea una función `esCapicua` que devuelva `true` si un número es capicua, `false` en caso contrario. <br>
     Para probar la función, prueba con los siguientes números: 121, 12321, 12345, 123321, 123456, 1234321, 1234567, 123454321.

610. Crea una función `esPrimo` que devuelva `true` si un número es primo, `false` en caso contrario. <br>
     

611. Crea una función `siguientePrimo` que devuelva el siguiente número primo más próximo al número pasado como parámetro. <br>
     
612. Crea una función `contaDigitos` que devuleva el número de dígitos de un número entero pasado como parámetro. <br>

613. Crea una función `volteaNumero` que devuelva el número pasado como parámetro, pero volteado. <br>

614. Crea una función `quitarPorDetras` que devuelva el número pasado como parámetro, pero quitando los dígitos indicados por el segundo parámetro. <br>

615. Crea un programa que solicite un número en binario por teclado, y lo pase a decimal. Muestre el número en binario y el número en decimal. <br>
     

#### Funciones anónimas

609. Crea una función anónima que calcule si un número es par y otra para impar, y asignar a una variable.
     
     Utilizando el array de números aleatorios `$arrAleatorios`, crea una función `filtrarPar` que filtre los números pares, y otra `filtrarImpar` que filtre los números impares, utilizando las funciones anónimas y devuelva un array con los números filtrados.

     Probar la función con el array de números aleatorios, y mostrando el resultado a través de `var_dump()`.



#### Funciones lambda

610. Basándote en el ejercicio anterior, en lugar de asignar a variables, modifica la función `filtrarPar` y `filtrarImpar` pasando las funciones directamente en la firma de la función. <br>
      
      Prueba la función con el array de números aleatorios, y mostrando el resultado a través de `var_dump()`.


611. Basada en el ejercicio anterior, crea una única función `filtrar` que reciba un array y una función lambda en formato `arrow`, y devuelva un array con los elementos filtrados. <br>
     
     - Prueba la función con los números pares e impares, y mostrando el resultado a través de `var_dump()`.


612. Basada en el ejercicio anterior, ahora utiliza la función predefida `array_filter` para realizar el filtrado de los elementos. <br>
     
     - Prueba la función con los números pares e impares, y mostrando el resultado a través de `var_dump()`.
  

613. Usa la función `array_map` para aplicar una función a cada uno de los elementos de un array. <br>
     
     - Crea una función que reciba un número y devuelva el cuadrado del mismo y probar con un array de números aleatorios. (Mostrar con `var_dump()`)
     - Igual, pero con una función que devuelva el cubo del número pero pasada como función anónima (Mostrar con `var_dump()`)
     - Igual, pero pasada como función flecha (Mostrar con `var_dump()`)


614. Transformar el siguiente json en un array, y mostrarlo por pantalla, en una lista ordenada. Recorre el array utilizando un bucle `foreach`.

     ```json
     $json = '{
     "nombre": "Juan",
     "apellidos": "Garcia Fernandez",
     "edad": 25,
     "ciudad": "Madrid",
     "pais": "España"
     }';
     ```

     > **Nota:** Utiliza la función `json_decode($json, true)` para convertir el json en un array.<br>
     > El parámetro `true` indica que se convierta en un array asociativo.<br>
     > En el este articulo puedes encontrar más información [parsear un json en PHP](https://code.tutsplus.com/how-to-parse-json-in-php--cms-36994t)


615. Basado en el ejercicio 607.
     
      Crea una función que reciba un número variable de argumentos (opción ...) y aplicar una función `lambda` pasada como parámetro.<br>
      La función devolverá un array, con los argumentos pasados y aplicada la función a cada uno de ellos.<br>
      Muestra el resultado por pantalla, utilizando `var_dump()`.


### Funciones predefinidas

700. Crea una función `contarLetrasPosicionImpar` que reciba una cadena, y devuelva el número de caracteres en posiciones impares.<br>
     Para probar la función, prueba varias opciones con frases de distinta longitud.


701. Crea una función `contarVocales` que reciba una cadena, y devuelva un array asociativo con cada una de las vocales como clave, y el total por cada una como valor. <br>
     Para probar la función, prueba varias opciones con frases de distinta longitud, y muestra el resultado con `var_dump()`.


702. Crea una función `analizador` que reciba una cadena, y devuelva un array asociativo con la siguiente información:
     
     - Número de palabras
     - Número de letras
     - Número de vocales
     - Número de consonantes
     - Número de espacios

     Para conocer si un valor es un espacio, puedes utilizar la función `ctype_space($valor)`, para conocer si un valor es una letra, puedes utilizar la función `ctype_alpha($valor)`, para conocer si un valor es un número, puedes utilizar la función `ctype_digit($valor)`, etc...<br>

     Para probar la función, prueba varias opciones con frases de distinta longitud, y muestra el resultado con `echo print_r()`.

703. Escribe una función `esPalindromo` que reciba una cadena y devuelva `true` si es un palíndromo, `false` en caso contrario. <br>
     Para probar la función, muestra al menos 3 palabras, y ejecuta las llamadas dentro de un párrafo `<p>`, mostrando el resultado de cada llamada.
       > Ejemplo: `<p>OSO es palindromo? <?= ... ?> </p>`, utilizando un condicional ternario.


704. Crea una función `convertirFraseToCani` que trasforme en Mayúscula las letras alternas.
      Para probar la función, define al menos 3 frases, declaradas dentro de un script PHP (en HTML), y ejecuta las llamadas dentro de un párrafo `<p>`, mostrando el resultado de cada llamada.
        > Ejemplo: <BR> 
            `<p><?= "Esta frase en Cani:"?><br><?= $frase ?></p>`<br>
            `<p><?= ... ?></p>`

705. Genera una función `codificaCesar()` para codificar una frase, utilizando el código de César. Tenga un parámetro `shiftPositions` que indique el número de elementos a desplazar el carácter. Si no se indica nada, por defecto el desplazamiento es 3. <br>
     
     Utiliza las funciones para trabajar con caracteres, a patir de una cadena y un desplazamiento:
     
     - Si el desplazamiento es 1, susituye cada letra por la A por la B, la B por la C, etc... y la Z por la A.
     - El desplazamiento no puede ser negativo.
     - Si se sale del rango de las letras, se reinicia en la A.
     - Los espacios, puntos y comas, no se modifican. (se supone que no se utilizan tildes ni caracteres especiales).

     Para probar la función, hazlo al menos con 3 frases, y volcar con `echo` el resultado de cada llamada.	


706. Genera una función `decodificaCesar(), para decodificar una frase, por defecto el desplazamiento es 3. Se aplican las mismas reglas que para el ejercicio 705. <br>
     Copia en este archivo lo que necesites del ejercicio anterior.<br>
     Prueba codificando y decodificando al menos 3 frases, y volcar con `echo` el resultado de cada llamada.

707. Crea una función `passwordGenerator` que genere una contraseña aleatoria de por defecto 8 caracteres, 2 digitos, 1 caracter especial y el resto letras. <br>
     La función recibirá 3 parámetros, `longitud`, `digitos` y `especiales`, y tendran los valores por defecto indicados.<br>
     Para probar la función, genera al menos 3 contraseñas, y volcar con `echo` el resultado de cada llamada.