# 04. Ejercicios de formularios

### Entrega:

- Crea una carpeta llamada `UT2\EC\03_ejercicios_formularios`.
- Dentro de esa carpeta crea los ficheros que te indique el ejercicio, con los nombres que te idique.
  
### Recursos

- Utiliza este [css](ec_formularios/css/index.css) para darle estilo a tus ejercicios, vincula el archivo `css` en tus ejercicios.


### Ejercicio 1

Crea un formulario con las siguientes características:

que contenga:

- Un campo de texto para introducir el nombre.
- Un botón para enviar con el texto (Enviar).

que haga:

- al enviar, vaya a la misma página, e indique en un mensaje de texto, "Hola, su nombre es [nombre]".
- si el campo de texto está vacío, indique en un mensaje de texto, "Por favor, introduzca su nombre".

reglas:

- no mezcles el código PHP y HTML.

Ejercicio resuelto:

```html	
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio Formularios</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <?php

    $nombre = isset($_GET['nombre']) ? $_GET['nombre'] : null;

  ?>
  <h1>Ejercicio Formulario 1</h1>

  <form  method="get">
    <p><label>Nombre: <input type="text" name="nombre" size="20" maxlength="20"></label></p>

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <div>
    <?php if (isset($nombre)) : ?>
      <p>Su nombre es: <?= $nombre ?></p>
    <?php else : ?>
      <p>Por favor, introduzca su nombre</p>
    <?php endif; ?>
    

</body>
</body>
</html>
```

### Ejercicio 2

Debes crear 2 páginas:

- **02_form.php (formulario)**

    Crea un formulario con las siguientes características:

    que contenga:

    - Una serie de botones de radio para seleccionar la fruta preferida (cereza, fresa, limón, manzana, naranja, pera).<br>
      ```html	
      <label><input type="radio" name="fruta" value="fresa"> Fresa</label>
      <label><input type="radio" name="fruta" value="cereza"> Cereza</label>
      ```

    - Un botón para enviar con el texto (Enviar).

    que haga:

    - al enviar, vaya a la página `02_action.php`, utilizando el método `GET`.

    reglas:

    - no mezcles el código PHP y HTML.
  
- **02_action.php (acción)**

  - Indique en un mensaje de texto, "Su fruta preferida es [fruta]", donde `[fruta]` es el valor de la fruta seleccionada.
  - si el campo de texto está vacío, indique en un mensaje de texto, "No te gusta la fruta??".
  - Agrega un `link` para volver a la página anterior.
    

### Ejercicio 3

Debes crear 2 páginas:

- **03_form.php (formulario)**

    Crea un formulario con las siguientes características:

    que contenga:

    - Un campo texto para introducir el nombre.
    - Un campo texto para introducir los apellidos.

    - Un botón para enviar con el texto (Enviar).
    - Un botón para borrar/resetear el formulario (Borrar).

    que haga:

    - al enviar, vaya a la página `03_action.php`, utilizando el método `GET`.

    reglas:

    - no mezcles el código PHP y HTML.
  
- **03_action.php (acción)**

  - Indique en un mensaje de texto, "Su nombre es: [Apellidos], [nombre]".
  - si algún cambpo de texto está vacio, debe indicar un mensaje en rojo, "No ha escrito su nombre o apellidos".
  
  - Agrega un `link` para volver a la página anterior.
    

### Ejercicio 4

Debes crear 1 páginas:

- **04_form.php (formulario)**

    Crea un formulario con las siguientes características:

    *que contenga:*

    - Campos:
      - Un campo numerico para introducir `su edad`.
      - Un campo texto para introducir `su peso`.

    - Botones:
      - Un botón para enviar con el texto (Enviar).
      - Un botón para borrar/resetear el formulario (Borrar).

    - Mostrar errores:
      - Un cuadro inferior (div) para mostrar los mensajes de error, que solo se muestre si hay errores.
      - En caso de que haya errores, estos se muestran en una lista.

    *que haga:*

    - al enviar (utilizando `GET`) vaya a la misma página y realize:
      - Indique en un mensaje de texto, "Su edad es [edad] y pesa [peso]".
      - si algún campo de texto está vacio, debe indicar los mensajes de error, en rojo y formando una lista.
        Ej: - "No ha escrito su edad"
            - "No ha escrito su peso"

    *reglas:*

    - no mezcles el código PHP y HTML.
  
  
- **04_action.php (acción)**

  - Indique en un mensaje de texto, "Su edad es [edad] y pesa [peso]".
  - si algún campo de texto está vacio, debe indicar un mensaje en rojo para cada uno de los campo no rellenado, en un Div
    Ej: - "No ha escrito su edad"
        - "No ha escrito su peso"
  
  - Agrega un `link` para volver a la página anterior.


### Ejercicio 5

Debes crear 2 páginas:

- **05_form.php (formulario)**

    Crea un formulario con las siguientes características:

    *que contenga:*

    - Campos:
      - Un campo numerico para introducir `su edad`.
      - Un campo texto para introducir `su peso`.

    - Botones:
      - Un botón para enviar con el texto (Enviar).
      - Un botón para borrar/resetear el formulario (Borrar).

    *que haga:*

    - al enviar, vaya a la página `05_action.php`, utilizando el método `GET`.

    reglas:

    - no mezcles el código PHP y HTML.
  
- **05_action.php (acción)**

  - Indique en un mensaje de texto, "Su edad es [edad] y pesa [peso]".
  - si algún campo de texto está vacio, debe indicar un mensaje en rojo para cada uno de los campo no rellenado (en formato de lista)
    Ej: - "No ha escrito su edad"
        - "No ha escrito su peso"
  
  - Agrega un `link` para volver a la página anterior.
  

### Ejercicio 6

Este ejercicio es una combinación de los ejercicios 4 y 5, donde la validación se lleva a cabo en la misma página.<br>
En este ejercicio entran utilizado algunos ideas a destacar:

- Se ha utilizado un campo `hidden` para saber si el formulario ha sido enviado.
- Si el formulario ha sido enviado, se realiza la validación de los campos, en caso contrario, se muestra el formulario.

Debes crear 1 páginas:

- **06_form.php (formulario)**

    Crea un formulario con las siguientes características:

    *que contenga:*

    - Campos:
      - Un campo texto para introducir `su nombre`.
      - Un campo texto para introducir `su direccion`.
      - un campo email para introducir `su correo`.
      - un campo de texto para introducir `su telefono`.

    - Botones:
      - Un botón para enviar con el texto (Enviar).
      - Un botón para borrar/resetear el formulario (Borrar).

    - Mostrar errores:
      - Un cuadro inferior (div) para mostrar los mensajes de error, que solo se muestre si hay errores.
      - En caso de que haya errores, estos se muestran en una lista.

    *que haga:*

    - si la página NO ha sido enviada, muestra el formulario.
    - si la página ha sido enviada,
      - si no existen errores, deben indicar los datos introducidos.
      - si existen errores, muestra el formulario con los campos rellenados (en la parte inferior).

    - Que contenga un enlace para volver mostrar el formulario, en cuaquier caso (si hay errores o no).
    
    reglas:

    - no mezcles el código PHP y HTML.
  

##### Resolución del ejercicio 6

```php
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejercicio Formularios</title>
  <link rel="stylesheet" href="css/index.css">
</head>

<body>
  <?php
    $isSubmitted = $_GET['_isSubmitted'] ?? false;

    if ($isSubmitted) {
      $nombre = $_GET['nombre'] ?? null;
      $direccion = $_GET['direccion'] ?? null;
      $email = $_GET['email'] ?? null;
      $telefono = $_GET['telefono'] ?? null;

      $errors = [];

      if (empty($nombre)) {
        $errors[] = 'El campo nombre es obligatorio';
      }

      if (empty($direccion)) {
        $errors[] = 'El campo dirección es obligatorio';
      }

      if (empty($email)) {
        $errors[] = 'El campo email es obligatorio';
      }

      if (empty($telefono)) {
        $errors[] = 'El campo teléfono es obligatorio';
      }
    }
  ?>
  
  <h1>Ejercicio Formulario 6</h1>

  <?php if (!$isSubmitted) : ?>
  <form method="get" action="">
    <p><label>Nombre: <input type="text" name="nombre" size="20" maxlength="20"></label></p>
    <p><label>Dirección: <input type="text" name="direccion" size="20" maxlength="50"></label></p>
    <p><label>Email: <input type="email" name="email" size="20" maxlength="50"></label></p>
    <p><label>Teléfono: <input type="tel" name="telefono" size="20" maxlength="50"></label></p>

    <input type="hidden" name="_isSubmitted" value="true">

    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>
  <?php endif; ?>

  <?php if ($isSubmitted) : ?>

    <?php if (count($errors)==0) : ?>
      <div id="data">
        <h3>Estos son sus datos</h3>
        <p>Nombre: <?= $nombre ?></p>
        <p>Dirección: <?= $direccion ?></p>
        <p>Email: <?= $email ?></p>
        <p>Teléfono: <?= $telefono ?></p>
      </div>
    <?php else : ?>  
      <div id="errores">
        <p>Se han producido los siguientes errores:</p>
        <ul>
          <?php foreach ($errors as $error) : ?>
            <li class="aviso"><?= $error ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

    <?php endif; ?>
    
    <div>
      <a href="06_form.php">Volver al formulario</a>
    </div>

  <?php endif; ?>

</body>
</body>

</html>
```

### Ejercicio 7

Repite el ejercicio anterior, con un formulario que tengas los siguientea campos:

- Un campo para introducir su nombre.
- Un campo para introudcir su edad;
- Un campo para introducir su peso;
- Un campo para introducir su altura;
- Un campo para introducir su sexo (hombre/mujer) (campo de texto);

Aplica los mismos conceptos del ejercicio anterior, e igualmente utiliza una sola página para todo.


### Ejercicio 8

Repite el ejercicio 6, pero esta vez enviando los datos por el método `POST`.

> 💡 Recuerda que para enviar por POST: `method=POST`.
