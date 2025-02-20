## Musify: Configurar API-REST Json API

## 📁 Recursos

- [Json API](https://jsonapi.org/)
- [Paquete Laravel JsonAPI](https://laraveljsonapi.io/)
- 

### Json API

**Introducción**

En la era digital actual, donde los datos son el núcleo de casi todas las interacciones en línea, la necesidad de un intercambio de datos estandarizado y eficiente nunca ha sido más crítica. Aquí es donde JSON:API brilla, ofreciendo un formato claro y estructurado para la comunicación entre cliente y servidor. Este artículo explora la importancia de JSON:API, su superioridad sobre otros estándares, y proporciona ejemplos prácticos utilizando Laravel y Node.js.

**Qué es JSON:Api**

JSON:API es un formato de especificación para construir APIs en JSON. Su principal objetivo es optimizar las solicitudes y respuestas HTTP, estableciendo convenciones claras que los desarrolladores pueden seguir para garantizar la consistencia de las APIs. JSON:API se centra en la eficiencia, flexibilidad y simplicidad, reduciendo la cantidad de tiempo y código necesarios para escribir una API.

#### Ventajas de Usar JSON:API

1. Estandarización: Proporciona un protocolo claro, eliminando las inconsistencias en el diseño de la API.
2. Eficiencia: Reduce la cantidad de datos transferidos mediante respuestas estructuradas y claras.
3. Facilidad de Uso: Simplifica el trabajo de los desarrolladores al seguir un estándar uniforme y predecible.
4. Flexibilidad: Permite respuestas detalladas incluyendo relaciones y enlaces.



## Pasos generar API al proyecto

### 1. Configurar el servidor

> [Seguir estos pasos a través del tutorial](https://laraveljsonapi.io/4.x/tutorial/03-server-and-schemas.html)

1. Instalar paquete Json:api en la aplicación
    ```bash
    composer require laravel-json-api/laravel
    composer require --dev laravel-json-api/testing
    ```
2. Publicar fichero de configuración del paquete 
    ```bash
    php artisan vendor:publish --provider="LaravelJsonApi\Laravel\ServiceProvider"
    ```

3. Indicar que los errores de al API se retorne como Json, no como HTML
   Abra el `bootstrap/app.php` y cambiar lo siguiente:

    ```php
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->dontReport(
          \LaravelJsonApi\Core\Exceptions\JsonApiException::class,
        );
        $exceptions->render(
          \LaravelJsonApi\Exceptions\ExceptionParser::renderer(),
        );
    ```
   El renderizador se encarga de convertir las excepciones al formato JSON:API, si el cliente ha solicitado contenido JSON:API a través del application/vnd.api+json.
   <br>
   <br>

4. Crear el servidor.
  
    Lo normal es que nuestra servidor evolucione, y no sabemos en este punto cuando versiones vamos a tener, por lo que lo más adecuado es indicar que comenzamos por la 1ª versión (v1).<br>
  
    Con este comando se agrega el servidor:
    ```
    php artisan jsonapi:server v1
    ```
    Este comando agregará una clase en el ruta `app/JsonApi/V1/Server.php`. Esta es la clase que contiene la configuración para elservidor JSON:API.

    Hay una cosa que debemos hacer en este punto: debemos decirle a Laravel JSON:API que tenemos un servidor. Para ello, debemos editar fichero `config/jsonapi.php` .

    Para agregar nuestro servidor, solo necesitamos descomentar la línea:

    ```diff
    'servers' => [
    -//  'v1' => \App\JsonApi\V1\Server::class,
    +    'v1' => \App\JsonApi\V1\Server::class,
    ],
    ``` 
    ¡Y eso es todo! Ahora tenemos un servidor JSON:API.



### 2. Configurando los recursos

Un recurso es la palabra genérica que se utiliza para nombrar algo que se quiere `exportar` a través de la API, un Albúm, un Artista, un Post, una Nota, ...

Debemos indicar al servidor, qué "forma" tendrá este recursos, que campos, que relaciones, ... para ello, necesitamos lo que se denomina una `esquema`. Necesitamos crear un esquem para cada recurso que queramos exportar, uno para Album, otro para Artista, ...

**Crear esquema Album**

Los esquemas y los modelos van estrechamente relacionados, ya que un esquema utilizará un modelo de base, para obtener la información.

Crear el esquema:

```
php artisan jsonapi:schema albums
```

Esto crea un nuevo archivo, `app/JsonApi/V1/Albums/AlbumSchema.php`.

**Confirar esquema Album**

Tendremos que revisar que nuestro esquema haya, enlazado al modelo `Album` correctamente, y además tendremos que indicar qué campos del modelo queremos exportar en nuestra API.

Nuestro esquema modelos debería quedar algo parecido a esto...

```php
<?php

namespace App\JsonApi\V1\Albums;

use App\Models\Album;
use LaravelJsonApi\Eloquent\Contracts\Paginator;
use LaravelJsonApi\Eloquent\Fields\DateTime;
use LaravelJsonApi\Eloquent\Fields\ID;
use LaravelJsonApi\Eloquent\Fields\Str;
use LaravelJsonApi\Eloquent\Filters\WhereIdIn;
use LaravelJsonApi\Eloquent\Pagination\PagePagination;
use LaravelJsonApi\Eloquent\Schema;

class AlbumSchema extends Schema
{

    /**
     * The model the schema corresponds to.
     *
     * @var string
     */
    public static string $model = Album::class;  

    /**
     * Get the resource fields.
     *
     * @return array
     */
    public function fields(): array
    {
        return [
            //Al ser un ID alfanumérico, debemos indicar el patrón que cumple
            ID::make()->matchAs('[a-zA-Z0-9]+'),
            //Campos
            Str::make('name'),
            Str::make('type'),
            //Indicar cómo se va a llamar el campo-exportar y la columa de la BD
            // ya que al ser palabras compuestas debemos indicarlo así.
            Str::make('albumType','albumType'),  
            Str::make('totalTracks','totalTracks'),
            Str::make('imageUrl','imageUrl'),
            //Campos de fecha
            DateTime::make('releaseDate','releaseDate')->sortable(),
            DateTime::make('createdAt')->sortable()->readOnly(),
            DateTime::make('updatedAt')->sortable()->readOnly(),
        ];
    }

    /**
     * Get the resource filters.
     *
     * @return array
     */
    public function filters(): array
    {
        return [
            WhereIdIn::make($this),
        ];
    }

    /**
     * Get the resource paginator.
     *
     * @return Paginator|null
     */
    public function pagination(): ?Paginator
    {
        return PagePagination::make();
    }

}
```

Una vez hecho esto, tenemos que indicar al servidor API que debe utilizar este esquema que hemos creado. Para ello, actualizamos el método `allSchemas()` en nuestro fichero `app/JsonApi/Server.php`. Actualízalo para que se vea así:

```diff
 protected function allSchemas(): array
 {
     return [
-        // @TODO
+        Albums\AlbumSchema::class,
     ];
 }
```

También muy importate, por ahora no queremos que nos **APLIQUE SEGURIDAD**, por lo que también agregamos a la configuración del servidor que `desactive la seguridad`, para ello le indicamos, sobreescribiendo la función `autorizable`, para que retorne `false`.

El fichero de configuración del servidor debería quedar así:

```php
class Server extends BaseServer
{

    //LA URL BASE DEL SERVIDOR
    protected string $baseUri = '/api/v1';

    /**
     * Bootstrap the server when it is handling an HTTP request.
     *
     * @return void
     */
    public function serving(): void
    {
        // no-op
    }

    /**
     * Get the server's list of schemas.
     *
     * @return array
     */
    protected function allSchemas(): array
    {
        return [
          AlbumSchema::class
        ];
    }

  public function authorizable(): bool
  {
    return false; //Desactiva autorizaciones
  }
}
```

### 3. Rutas API

Hasta ahora hemos agregado ciertas configuraciones, como el esquema Album, hemos creado un servidor API, con la ruta `api\v1`, pero aún no hemos agregado ninguna forma de indicar las rutas disponibles. 

Si revisamos el proyecto actual, tenemos dentro de la carpeta `routes\web.php` el fichero de las rutas que tiene nuestro proyecto desde un punto de vista de Web, es decir, las rutas a las que puede navegar un usuario y que devuelven una página WEB.

Pero ahora necesitamos decirle un fichero que configure las rutas que tendrá nuestro servidor, como un servior de datos, de datos en formato JSON, es decir, las rutas de la API.

Para ello, crea un fichero `routes\api.php`, e indica a `laravel` que las rutas para la api estarán disponibles en ese fichero.

Para ello, en `boostrap\app.php` indica en la función `Application::configure` donde está el fichero para las rutas API.

```diff
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
+        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
...
```
Y dentro del fichero `routes\api.php` configura las rutas del servidor, de la siguiente forma:

```php
<?php

  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Route;
  use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
  use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;
  use LaravelJsonApi\Laravel\Routing\ResourceRegistrar;

  Route::get('/user', function (Request $request) {
    return $request->user();
  });

  JsonApiRoute::server('v1')
      ->prefix('v1')
      ->resources(function (ResourceRegistrar $server) {
          $server->resource('albums', JsonApiController::class)->readOnly()
  });
```
Lo que estamos indicando en las rutas, es que:

- Configure un servidor, `v1`.
- El prefijo de todas las rutas de ese servidor será `api/v1`.
- Y los recursos que quiero mostrar en ese servidor. (Por ahora solo el album)

Al agregar el servidor API a nuestra `proyecto laravel` tendremos nuevas rutas disponibles, para comprobarlo ejecutar el comando `php artisan route:list`. Comprobar que salen las rutas del esquema aplicado de Album...

```bash
GET|HEAD   api/v1/albums ............ v1.albums.index › LaravelJsonApi\Laravel › JsonApiController@index  
GET|HEAD   api/v1/albums/{album} .... v1.albums.show › LaravelJsonApi\Laravel › JsonApiController@show
```

> Nuevas rutas disponibles para la API.

Ahora, desde `POSTMAN` podemos probar que funciona, creando una petición GET, para la ruta `https://musify.test/api/v1/albums` e indicando un nuevo header `Accept: application/vnd.api+json`.

Y os tendría que devolver correctamente información sobre todos los albums que tengais disponibles en vuestra BD.


### 4. Relaciones

No solo es necesario obtener un Recurso, sino también es fundamental obtener información relacionada a ese recurso. En nuestro ejemplo, un Album está relacionado con `artist` y con `tracks`, por tanto es necesario indicar estas relaciones en la configuración de nuestro servidor.

Esta configuración debemos indicarla en 2 lugares, a nivel del esquema, y a nivel de las rutas.

**Agregando las relaciones al Esquema**

Dentro del fichero `AlbumSquema.php`, agrega las siguientes líneas a la función `fields`:


```diff
    // Fichero AlbumSchema.php
    public function fields(): array
    {
        return [
            ID::make()->matchAs('[a-zA-Z0-9]+'),
            Str::make('code'),
            Str::make('name'),
            Str::make('type'),
            Str::make('albumType','albumType'),
            Str::make('totalTracks','totalTracks'),
            Str::make('imageUrl','imagedUrl'),
            DateTime::make('releaseDate','releaseDate')->sortable(),
            DateTime::make('createdAt')->sortable()->readOnly(),
            DateTime::make('updatedAt')->sortable()->readOnly(),
            //Relaciones
+           BelongsTo::make('artist')->type('artists')->readOnly(),  //Un album tiene un artista
+           HasMany::make('tracks')->readOnly(), //Un album tiene muchas caciones.
        ];
    }
```
> Se indica `readOnly()` porque esta información relacionada es solo de consulta.

**Agregando las relaciones a las rutas**

Por último también es fundamental, tener rutas para obtener la información relacionada de un recurso:

Dentro del fichero `routes\api.php`, agrega las siguientes líneas:

```php

JsonApiRoute::server('v1')
      ->prefix('v1')
      ->resources(function (ResourceRegistrar $server) {
        $server->resource('albums', JsonApiController::class)
          ->readOnly()
+          ->relationships(function(Relationships $relations) {
+              $relations->hasOne('artist')->readOnly();
+              $relations->hasMany('tracks')->readOnly();
          });
  });
```

> Antes de crear estas relaciones, hay que crear los esquemas para Artist y Tracks.


Ahora, si volvemos a comprobar las rutas, existirán nuevas rutas para obtener los elementos relacionados con Albums.

```
GET|HEAD   api/v1/albums .................................. v1.albums.index 
GET|HEAD   api/v1/albums/{album} ......................... v1.albums.show 
GET|HEAD   api/v1/albums/{album}/artist ...................v1.albums.artist 
GET|HEAD   api/v1/albums/{album}/relationships/artist .....v1.albums.artist.show   
GET|HEAD   api/v1/albums/{album}/relationships/tracks .....v1.albums.tracks.show
GET|HEAD   api/v1/albums/{album}/tracks .................. v1.albums.tracks 

```

**Probar con Postman**

Ahora desde Postman, crear las peticiones necesarias para probar todas las nuevas rutas creadas:

- Obtener todos los albums `https://musify.test/api/v1/albums`
- Obtener un album `https://musify.test/api/v1/album/{id}`
- Obtenmer el artista de un Album `https://musify.test/api/v1/album/{id}/artist`
- Obtener las canciones de un Album `https://musify.test/api/v1/albums/{id}/tracks`
  
> Indicar en todas estas peticiones el `Header` => `Accept: application/vnd.api+json`.



### 5. Resto de recursos

En este punto, ahora quedaría agregar el resto de recusos, `Artist`, `Track`, y cualquier recurso adicional que se haya creado en el proyecto.

En resumen para cada recurso se debe crear:

1. El esquema `php artisan jsonapi:schema {recurso}`
2. Dentro del esquema agregar los `fields` y las `relations`.
3. Agregar el esquema la servidor dentro del fichero `JsonApi/Server.php`, dentro del método `allSchemas`.
4. Agregar el esquema también a las rutas del servidor `routes\api.php`, indicando ` $server->resource('{resource}', JsonApiController::class)->readOnly()`, y las relaciones que tenga el recurso.
5. Y por último, comprobar que las rutas se han creado bien, con el comando `php artisan route:list`
6. Y para finalizar, crear las peticiones de prueba, en el proyecto de `Postman`.








