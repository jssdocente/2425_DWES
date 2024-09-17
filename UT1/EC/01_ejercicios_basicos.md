# Ejercicios básicos de PHP

Estos ejercicios están pensados para que puedas practicar y afianzar los conocimientos adquiridos en este tema.

### Entrega

Normas de entrega:

- Cada ejericio se entregará en un archivo independiente, con el formato `T02_XXX_ejercicio.php`, donde `XX` será el número del ejercicio.  (Ejemplo: `T02_001_ejercicio.php`).
- Se guardarán dentro de la estructura de carpetas del tema `UT2`, carpeta ejercicios `EC`y `01_basicos`. En la ruta `UT2\EC\01_basicos\`.
- No es necesario entregarlos como tarea, pero si es necesario realizarlos, y se preguntarán aleatoriamente en clase.


## Ejercicios

### Bloque 1

Estos ejercicios se realizarán utilizando un único bloque de código PHP dentro del HTML, es decir:

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

101. Muestra 3 frases, cada una en un párrafo utilizando las tres posibilidades que existen de mostrar contenido. Tras ello, introduce dos comentarios, uno de bloque y otro de una línea.

102. Diseña un programa Php que dado 2 números (fijados por tí), me calcule la suma, resta, multiplicación, división y resto. Utiliza saltos de línea entre los diferentes resultados.

```php
$num1 = 10;
$num2 = 5;

echo "La suma de ...";
echo "La resta ...";

```

103. Diseña un programa Php que dado 2 números (fijados por tí), me calcule la media de ambos y la muestre.

104. Diseña un programa Php que dado 3 números (fijados por tí), me muestre el mayor de ellos.

105. Cambia el ejercicio anterior, para que con una variable, se indique calcular el mayor el menor, y además cambie el mensaje.

---

### Bloque 2

Repite los ejercicios anteriores, pero esta vez, utlizando los diferentes opciones para incrustar etiquetas `<?php ?>` dentro del código.

```html	
<!doctype html>
<html>
<head>
  <title>Ejercicio 1</title>
</head>
<body>
  <p><?php echo "Me llamo ..."?>;</p>
  <p><?= "Me llamo ..."?>;</p>
</body>
```

201. Mismo ejercicio que el 101 (con el cambio indicado en el enunciado) 
202. ...
203. ...
204. ...
205. ...
  

### Bloque 3

301. Escribe un programa que almacene en variables tu nombre, primer apellido, segundo apellido, email, año de nacimiento y teléfono. Luego muéstralos por pantalla dentro de una tabla con los nombres de las columnas en la primera columna y los valores en la segunda.

    | Nombre | Valor |
    |--------|-------|
    | Nombre | ...   |
    | Apellido 1 | ...   |
    | Apellido 2 | ...   |
    | Email | ...   |
    | Año de nacimiento | ...   |
    | Teléfono | ...   |


302. Calcula la edad de una persona, si nacio en tal año (fijada por tí) y mostrar:
   - mostrar la edad que tendrá dentro de 10 años y hace 10 años. 
   - muestra qué año será en cada uno de los casos. 
   - muestra el año de jubilación suponiendo que trabajarás hasta los 67 años.

    Tip: La función `date('Y')` devuelve el año actual.
    Utiliza el siguiente formato:

    ```
    Datos de la persona:
    - Nacimiento: 1991
    - Edad actual: 33 años
    - Dentro de 10 años tendrás 43 años y será el año 2034
    - Hace 10 años tenías 23 años y era el año 2004
    - Te jubilarás en el año 2050
    ```

303. A partir de una edad (fijada por tí) muestra por pantalla:

   - bebé si tiene menos de 3 años
   - niño si tiene entre 3 y 12 años
   - adolescente entre 13 y 17 años
   - adulto entre 18 y 66
   - jubilado a partir de 67

304. Escribe un programa que funciones similar a un reloj, de manera que a partir de los valores de hora del sistema, muestra la hora dentro de un segundo. Tras las 23:59:59, debe mostrar 00:00:00.

    Tip: Utiliza la función `date('H:i:s')` para obtener la hora actual.
    

### Bloque 4: Bucles


402.  Escribe un programa que muestre la tabla de multiplicar del 2, del 3 y del 4, utilizando un bucle `for`. El texto `Tabla ...` debe ser un título de nivel 2 `<h3>` y cada línea de la tabla debe ser un párrafo `<li>`.

    ```
    Tabla del 2
    2 x 1 = 2
    2 x 2 = 4
    ...
    2 x 10 = 20

    Tabla del 3
    3 x 1 = 3
    3 x 2 = 6
    ...
    3 x 10 = 30


408. Escribe un programa que muestre los números pares del 0 al 50 (dentro de una lista desordenada).

409. A partir del ejercicio anterior, refactorizar para que funcione con `inicio` y `fin`.

410. A partir de una base y exponente, mediante la acumulación de productos, calcula la potencia utilizando la instrucción for.
  
      ```
      #Ejemplo

      2^3 = 2 * 2 * 2 = 8
      3^4 = 3 * 3 * 3 * 3 = 81
      ```


411. Reescribe el ejercicio anterior haciendo uso sólo de la instrucción `while`.

412. Reescribe el ejercicio anterior haciendo uso sólo de la instrucción `do-while`.

413. Escribe un programa que muestre los números del 1 al 100, pero que en lugar de los múltiplos de 3 muestre la palabra "Fizz" y en lugar de los múltiplos de 5 muestre "Buzz". Para los múltiplos de ambos, muestra "FizzBuzz".

    ```
    1, 2, Fizz, 4, Buzz, Fizz, 7, 8, Fizz, Buzz, 11, Fizz, 13, 14, FizzBuzz, ...
    ```
414. Muestra dentro de una tabla HTML la tabla de multiplicar del numero que reciba como parámetro.
    
      > Recordartorio: <br>
      > [La etiqueta HTML `<table>`](https://lenguajehtml.com/html/tablas/etiqueta-html-table/)
    
    Por ejemplo:

    | a | * | b | = | a*b |
    |---|---|---|---|-----|
    | 7 | * | 1 | = | 7   |
    | 7 | * | 2 | = | 14  |
    | ... | | | | |
    | 7 | * | 10 | = | 70  |


414. Muestra dentro de una tabla HTML la tabla de multiplicar del numero que reciba como parámetro. Utiliza <thead> con sus respectivos <th> y <tbody> para dibujar la tabla.
    
      > Recordartorio: <br>
      > [La etiqueta HTML `<thead>`](https://lenguajehtml.com/html/tablas/organizacion-tablas/)
    
    Por ejemplo:

    | a | * | b | = | a*b |
    |---|---|---|---|-----|
    | 7 | * | 1 | = | 7   |
    | 7 | * | 2 | = | 14  |
    | ... | | | | |
    | 7 | * | 10 | = | 70  |


415. Muestra dentro de una tabla HTML la tabla de multiplicar del numero que reciba como parámetro. Utiliza <thead> con sus respectivos <th> y <tbody> para dibujar la tabla. Además, añade una fila con el resultado de la suma de todos los resultados.

416. Crea un programa que muestre por pantalla un cuadrado exactamente igual (fíjate bien en los encabezados, tanto de las filas como de las columnas) al de la imagen con las tablas de multiplicar.
     
      > Nota: Pon en negrita los encabezados de las filas y columnas.

      ![Cuadrado de tablas de multiplicar](https://jssdocente.github.io/dwes2425d/imagenes/02/02p228.png)

  