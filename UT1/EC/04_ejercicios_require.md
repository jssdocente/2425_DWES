# 04. Ejercicios Require/include

PHP nos permite incluir archivos en otros archivos, para reutilizar código, o para separar la lógica de la presentación.<br>
En este grupo de ejercicios a trabajar con la inclusión de archivos.

La inclusión de archivos se puede hacer de dos formas:

- `require`: Incluye un archivo, y si no lo encuentra, detiene la ejecución del script.
- `include`: Incluye un archivo, y si no lo encuentra, muestra un aviso, pero sigue ejecutando el script.

Estas opciones tienen además una versión segura, que es `require_once` e `include_once`, que evita que se incluya el archivo más de una vez.

Más información en la [documentación oficial](https://www.php.net/manual/es/function.require.php) y en los [apuntes de la asignatura](https://jssdocente.github.io/dwes2425d/02.1_php_basico.html#biblioteca-de-funciones).

### Entrega:

- Crea una carpeta llamada `UT2\EC\04_ejercicios_include`.
- Dentro de esta carpeta, crea la estructura de carpetas y archivos como se indica en cada uno de los ejercicios.
  

### Recursos


### Biblioteca de funciones

Dentro de la carpeta `UT2\EC\04_ejercicios_include`, crea una carpeta llamada `biblioteca` y dentro de ella un archivo llamado `funciones01.php`.

#### Ejercicio 1

Las funciones del [ejercicio 602](02_ejercicios_require.md#funciones) las vamos a trasladar a este archivo `biblioteca/funciones01.php`.

-  `digitos(int $num): int`
-  `digitoN(int $num, int $pos): int`
-  `quitaPorDetras(int $num, int $cant): int`
-  `quitaPorDelante(int $num, int $cant): int`.


Ahora crea un archivo `04.001_ejercicio.php` que utilice las funciones de la biblioteca y muestre los resultados por pantalla.

Por ejemplo:
  
```php
<?php
//Utiliza require para incluir el archivo con las funciones

$num = 123456789;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <p>El número <?= $num ?> tiene <?= digitos($num) ?> dígitos.</p>
    <p>El dígito 3 del número <?= $num ?> es <?= digitoN($num, 3) ?>.</p>
    <p>Si le quitamos 3 dígitos por detrás al número <?= $num ?>, nos queda <?= quitaPorDetras($num, 3) ?>.</p>
</body>
</html>
```

#### Ejerccio 2

Las funciones del [ejercicio 609, 610, 611](02_ejercicios_interm.md#funciones) las vamos a trasladar a este archivo `biblioteca/funciones02.php`.

Las funciones son las siguientes:

- esCapicua(int $num): bool
- esPrimo(int $num): bool
- siguientePrimo(int $num): int

Ahora crea un archivo `04.002_ejercicio.php` que utilice las funciones de la biblioteca y muestre los resultados por pantalla.

Utiliza la siguiente plantilla:

```php
<?php
//Utiliza require_one para incluir el archivo con las funciones

$num = 123456789;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2</title>
</head>
<body>
    <h1>Ejercicio 2</h1>
    <p>El número <?= $num ?> <?= esCapicua($num) ? 'es' : 'no es' ?> capicúa.</p>
    <p>El número <?= $num ?> <?= esPrimo($num) ? 'es' : 'no es' ?> primo.</p>
    <p>El siguiente número primo a <?= $num ?> es <?= siguientePrimo($num) ?>.</p>
</body>
</html>
```

#### Ejercicio 3

Las funciones del [ejercicio 700, 701, 702, 703](02_ejercicios_interm.md#funciones-predefinidas) las vamos a trasladar a este archivo `biblioteca/funciones03.php`.

Las funciones son las siguientes:

- contarLetrasPosicionImpar(string $frase): int
- contarVocales(string $frase): array
- analizador(string $frase): array
- esPalindromo(string $frase): bool

En base a estas funciones, crea un archivo `04.003_ejercicio.php` que utilice las funciones de `funciones03.php` y muestre los resultados por pantalla.

Utiliza la siguiente plantilla:

```php
<?php
//Utiliza include para incluir el archivo con las funciones

$frase = 'La ruta nos aportó otro paso natural';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1>Ejercicio 3</h1>
    <p>La frase "<?= $frase ?>" tiene <?= contarLetrasPosicionImpar($frase) ?> letras en posición impar.</p>
    <hr>
    <p>La frase "<?= $frase ?>" tiene las siguientes vocales:</p>
    <ul>
        <?php foreach (contarVocales($frase) as $vocal => $cantidad): ?>
            <li><?= $vocal ?>: <?= $cantidad ?></li>
        <?php endforeach; ?>
    </ul>
    <hr>
    <p>La frase "<?= $frase ?>" tiene las siguientes características:</p>
    <ul>
        <?php foreach (analizador($frase) as $caracteristica => $valor): ?>
            <li><?= $caracteristica ?>: <?= $valor ?></li>
        <?php endforeach; ?>
    </ul>
    <hr>
    <p>La frase "<?= $frase ?>" <?= esPalindromo($frase) ? 'es' : 'no es' ?> palíndromo.</p>
</body>
</html>
```

#### Ejercicio 4

Las funciones del [ejercicio 704, 705, 706](02_ejercicios_interm.md#funciones-predefinidas) las vamos a trasladar a este archivo `biblioteca/funciones04.php`.

Las funciones son las siguientes:

- convertirFraseToCani(string $frase): string
- codificaCeasar(string $frase, int $shiftPositions): string
- decodificaCeasar(string $frase, int $shiftPositions): string

En base a estas funciones, crea un archivo `04.004_ejercicio.php` que utilice las funciones de `funciones04.php` y muestre los resultados por pantalla.

Utiliza la siguiente plantilla:

```php
<?php
//Agrega lo include_once para que este script funcione

$frase = 'La ruta nos aportó otro paso natural';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <p>La frase: "<?= $frase ?>" convertida a cani es:<br><?= convertirFraseToCani($frase) ?>.</p>
    <hr>
    <p>La frase: "<?= $frase ?>" codificada con el cifrado César es:<br><?= codificaCeasar($frase, 3) ?>.</p>
    <p>La frase "<?= $frase ?>" decodificada con el cifrado César es:<br><?= decodificaCeasar(codificaCeasar($frase, 3), 3) ?>.</p>
</body>
</html>
```

#### Ejercicio 5

Las funciones del [ejercicio 707](02_ejercicios_interm.md#funciones-predefinidas) las vamos a trasladar a este archivo `biblioteca/funciones05.php`.

Las funciones son las siguientes:

- passwordGenerator(int $length,int $digits,int $specialChars): string

En base a esta función, crea un archivo `04.005_ejercicio.php` que utilice la función de `funciones05.php` y muestre los resultados por pantalla.

Utiliza la siguiente plantilla:

```php
<?php
//Agrega lo necesario para que este script funcione

$length = 10;
$digits = 2;
$specialChars = 2;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5</title>
</head>
<body>
    <h1>Ejericio 5</h1>
    <p>La contraseña generada es: <?= passwordGenerator($length, $digits, $specialChars) ?>.</p>
</body>
</html>
```

### División en archivos: Lógica y presentación

En esta serie de ejercicios vamos a trabajar la división de un mismo fichero, que incluye tanto la lógica como la presentación, en dos ficheros, utilizando para ello las directivas de inclusión de archivos (`require`, `include`, `require_once`, `include_once`).

**¿Cómo es el ciclo de una llamada en PHP?**

![image](https://github.com/user-attachments/assets/fadb1bad-52f2-4f8f-867b-767b7095115e)


### Ejercicio 6

En base al siguiente fichero que incluye tanto la lógica como la presentación:

```php
<?php
$nombre = 'Juan';
$apellido = 'Gómez';
$edad = 25;
$ciudad = 'Madrid';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6</title>
</head>
<body>

    <h1>Datos personales</h1>
    <p>Nombre: <?= $nombre ?></p>
    <p>Apellido: <?= $apellido ?></p>
    <p>Edad: <?= $edad ?></p>
    <p>Ciudad: <?= $ciudad ?></p>

</body>
</html>
```

Separa la lógica de la presentación en dos ficheros diferentes, uno llamado `04.006_controller.php` y otro llamado `04.006_view.php`.

Haz lo necesario para que el script siga funcionando igual como si estuviera todo en un solo fichero.

### Ejercicio 7

En este ejercicio debes crear los siguientes ficheros:

- 04.007_form.php
- 04.007_logic.php
- 04.007_view.php

De tal forma, que el ciclo debe ser el siguiente:

1. Usuario accede a 04.007_form.php
3. El Formulario envia la petición a 04.007_logic.php
4. La lógica valida los datos
   1. si son correctos llama a la Vista (04.007_view.php)
   2. si no, vuelve a llamar al Formulario pasando los errores cometidos. 
5. Desde la vista se muestra el resultado, y un enlace para volver al Formulario.

Formulario:
```php
 <form action="04.007_logic" method="POST">
    <p><label>Nombre: <input type="text" name="nombre" size="20" maxlength="20"></label></p>
    <p><label>Dirección: <input type="text" name="direccion" size="20" maxlength="50"></label></p>
    <p><label>Email: <input type="email" name="email" size="20" maxlength="50"></label></p>
    <p><label>Teléfono: <input type="tel" name="telefono" size="20" maxlength="50"></label></p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>
```

Vista:
```php
 <div id="data">
    <h3>Estos son sus datos</h3>
    <p>Nombre: <?= $nombre ?></p>
    <p>Dirección: <?= $direccion ?></p>
    <p>Email: <?= $email ?></p>
    <p>Teléfono: <?= $telefono ?></p>

    <p><a href="04.007_form.php">Volver al formulario</a></p>
  </div>    
```


### Ejercicio 8

Las funciones del [ejercicio 603](02_ejercicios_interm.md#funciones) las vamos a trasladar a este archivo `biblioteca/funciones05.php`.

Las funciones son las siguientes:

- `dolar2euro(float $dolares): float`

En base a esta función, crea un archivo `04.008_ejercicio.php` que utilice la función de `funciones05.php` y muestre los resultados por pantalla.

Crea un formulario en un archivo llamado `04.008_form.php` donde el usuario puede introducir una cantidad en dólares y al enviar el formulario, se enviará a un archivo llamado `04.008_logic.php` que validará la información. En caso de que dolares o cambio no venga, se enviarán los errores de vuelta al formulario, a través de un array asociativo, utilizando la clave del campo (dolares, cambio) para almacenar el error para ese tipo de campo. `04.008_view.php` que se encargará de hacer la conversión de dólares a euros.
En el formulario se mostrarán los errores debajo de los campos correspondientes.

Si todo es correcto, se llama a la vista, que mostrará el resultado de la conversión.

Utiliza la siguiente plantilla para el formulario:

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Conversor de dólares a euros</h1>
    <form action="04.008_view.php" method="GET">
        <div>
            <div>
                <label for="dolares">Dólares:</label>
                <input type="number" name="dolares" id="dolares">
            </div>
            <div>
            <?php if ($errors["dolares"] ?? false) : ?>
                ...
            <?php endif; ?>
            </div>    
        </div>
        <div>
            <div>
                <label for="cambio">Cambio día:</label>
                <input type="number" name="cambio" id="cambio">
            </div>
            //Incluir el mensaje de error si existe
        </div>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
```

Utiliza la siguiente plantilla para el archivo `04.008_view.php`:

```php
<?php
//Agrega lo necesario para que este script funcione
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 8</title>
</head>
<body>
    <h1>Conversor de dólares a euros</h1>
    <p><?= $dolares ?> dólares son <?= dolar2euro($dolares) ?> euros.</p>
</body>
</html>
```



### Ejercicio 9


Utilizando el fichero [data.php](_res/data.php), que contiene un array `$provincias` que contiene un listado de todas las provincias, realiza los siguiente:

- Crea un archivo llamado `04.009_data.php` que contenga los datos del array `$provincias`.
- Crea un formulario en un archivo llamado `04.009_form.php` donde el usuario puede introducir una serie de datos para filtrar las provincias.
  *Este formulario deberá tener:*
  - Un campo de texto para filtrar por nombre de provincia.
  - Um campo de número para filtrar por el código de la provincia.
  - Un campo de selección donde en un campo [select](https://developer.mozilla.org/es/docs/Web/HTML/Element/select) se muestren las comunidades autónomas. (rellenado desde provincias, utiliza la función `array_map` para quedarte solo el nombre de la comunidad).
  
  Al enviar el formulario, se enviarán los datos a un archivo llamado `04.009_logic.php` que se encargará de filtrar las provincias que cumplan los criterios.<br>
  Las provincias que cumplan los filtros se guardarán en un array llamado `$provinciasFiltered` (que podrá ser accesible desde el archivo `04.009_view.php`).
  
  Los resultados se mostrarán en un archivo llamado `04.009_view.php`, de la siguiente forma:

  ```php
  <?php
    //Agrega lo necesario para que este script funcione
  ?>

  <!DOCTYPE html>
  <html lang="es">
  <head>
      <meta charset="UTF-8">
      <title>Ejercicio
  </head>
  <body>
      <h3>Provincias que cumplen los criterios</h3>
      <ul>
          <?php foreach ($provinciasFiltered as $provincia): ?>
              <li><?= $provincia['NOMBRE_PROVINCIA'] ?> (<?= $provincia['CODPROV'] ?>) - <?= $provincia['COMUNIDAD_CIUDAD_AUTONOMA'] ?></li>
          <?php endforeach; ?>
      </ul>
      <?php if (count($provinciasFiltered)==0) :>
          <p>No se han encontrado provincias que cumplan los criterios.</p>
          <p>
            <a href="04.009_form.php">Probar de nuevo</a>
          </p>
      <?php endif; ?>
  </body>
  </html>
  ```

