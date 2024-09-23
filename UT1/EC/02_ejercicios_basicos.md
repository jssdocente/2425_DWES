# 02. Ejercicios básicos de PHP

Estos ejercicios están pensados para que puedas practicar y afianzar los conocimientos adquiridos en este tema.

### Entrega

Normas de entrega:

- Cada ejericio se entregará en un archivo independiente, con el formato `02.XXX_ejercicio.php`, donde `XX` será el número del ejercicio.  (Ejemplo: `02.001_ejercicio.php`).
- Se guardarán dentro de la estructura de carpetas del tema `UT2`, carpeta ejercicios `EC`y `01_basicos`. En la ruta `UT2\EC\02_basicos\`.
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

501.   Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego muéstralo en una lista desordenada. Para crear un número aleatorio, utiliza la función rand(inicio, fin). Por ejemplo:

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

505. *Juego del calamar.* <br>
Crea un array asociativo, para simular que 10 personas compran un boleto de loteria entre 1-100 números. Cada persona comprará un número aleatorio, y no se pueden repetir. <br>
El programa debe ejecutarse hasta que haya un único ganador, que será el que quede en pie. <br>
El programa irá obteniedo números de 1-100, simulando que se extraen del bombo. Si el número extraido coincide con el número de algún jugador, este quedará eliminado, sino se volverá a tirar. Ganará el último Jugador. <br>

Por cada ronda, se mostrará la siguiente información:

- Número extraido
- Lista de los números extraidos.
- No hay jugador con ese número o Jugador eliminado. (Quedan X jugadores)
  
Al final, se mostrará se mostrará el jugador ganadory el número del jugador que lo tiene.


### Funciones

600. Crea las siguientes funciones:

  - `esPar(int $num)`: Devuelve `true` si el número es par, `false` en caso contrario.
  - Una función que devuelva un array de tamaño `$tam` con números aleatorios comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array.
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

  - Una función dolar2euro(float $dolares): float que convierta una cantidad de dólares a euros. La función recibirá un parámetro que será el factor de conversión. En caso de que no se indique nada, aplicar el siguiente factor (1.08).
  - La misma función, pero que convierta de euros a dólares.
  - Prueba las funciones anteriores probando con diferentes cantidades y factores de conversión.


604. Refactoriza el ejercicio anterior, copiando las funciones en un archivo `02.604_funciones.php`, y creando un archivo `02.604_index.php` que las incluya y las pruebe (copiado del ejercicio anterior).


605. Basaso en el ejercico anterior, utiliza los archivos `02.604_funciones.php` y rescata los valores de los parámetros de la URL, para que puedan ser pasados como parámetros a las funciones. Existen 2 parámetros: `moneda`, `cantidad` y factor de conversión `factor` (este valor puede ser opcional). <br>
     
      Por ejemplo: `http://localhost/02.605_index.php?moneda=dolar&cantidad=100&factor=1.08` o `http://localhost/02.605_index.php?moneda=euro&cantidad=100`

      La página mostrará el resultado de la conversión, indicando `100 dolares son 108 euros a un factor de conversión de 1.08` o `100 euros son 92.59 dolares a un factor de conversión de 1.08`.


#### Funciones anónimas

606. Crea una función anónima que calcule si un número es par y otra para impar, y asignar a una variable.
     
     Utilizando el array de números aleatorios `$arrAleatorios`, crea una función `filtrarPar` que filtre los números pares, y otra `filtrarImpar` que filtre los números impares, utilizando las funciones anónimas y devuelva un array con los números filtrados.

     Probar la función con el array de números aleatorios, y mostrando el resultado a través de `var_dump()`.



#### Funciones lambda

608. Basándote en el ejercicio anterior, en lugar de asignar a variables, modifica la función `filtrarPar` y `filtrarImpar` pasando las funciones directamente en la firma de la función. <br>
      
      Prueba la función con el array de números aleatorios, y mostrando el resultado a través de `var_dump()`.


609. Basada en el ejercicio anterior, crea una única función `filtrar` que reciba un array y una función lambda en formato `arrow`, y devuelva un array con los elementos filtrados. <br>
     
     - Prueba la función con los números pares e impares, y mostrando el resultado a través de `var_dump()`.


610. Basada en el ejercicio anterior, ahora utiliza la función predefida `array_filter` para realizar el filtrado de los elementos. <br>
     
     - Prueba la función con los números pares e impares, y mostrando el resultado a través de `var_dump()`.
  

611. Usa la función `array_map` para aplicar una función a cada uno de los elementos de un array. <br>
     
     - Crea una función que reciba un número y devuelva el cuadrado del mismo y probar con un array de números aleatorios. (Mostrar con `var_dump()`)
     - Igual, pero con una función que devuelva el cubo del número pero pasada como función anónima (Mostrar con `var_dump()`)
     - Igual, pero pasada como función flecha (Mostrar con `var_dump()`)


