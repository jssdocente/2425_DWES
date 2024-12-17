<?php

use core\Response;

function dd($value)
  {
    var_dump($value);
    die();
  }

  function urlIs($url): bool
  {
    return (parse_url($_SERVER['REQUEST_URI'])['path']) == $url;
  }

  function abort($httpCode): void
  {
    http_response_code($httpCode);
    view("{$httpCode}.view.php");
    die();
  }

  /**
   * Comprueba si un usxuario tiene permiso en ese recurso.
   * Si no está permitido lanza código 403
   */
  function authorize($resourceUserId): void
  {
    global $globalUserId;

    if ($resourceUserId != $globalUserId) {
      abort(Response::FORBIDDEN);
    }
  }

  function base_path($path = '')
  {
    return BASE_PATH . $path;
  }

  function view($path = '', $atributes = [])
  {
    extract($atributes); //Extraemos las variables del array y las convertimos en variables en el contexto actual.
    require base_path('views/' . $path);
  }
