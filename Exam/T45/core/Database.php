<?php

namespace core;

use PDO;
use PDOStatement;

class Database {
  private PDO $connectionBd;
  private string $cadena_conexion;
  private PDOStatement $comando;

  public function __construct(array $config, $user = null, $password = null) {

    $driver = $config['driver'];

    if ($driver === 'sqlite') {
      //Si driver es SqlLite ==> utilizo unos parámetros
      $dsn = "sqlite:{$config['dbname']}";
    } else {
      //Si driver es MySQL ==> utilizo el resto de parámetros
      $dsn = http_build_query($config, '', ';');
      $dsn = str_replace("driver={$config['driver']};", "{$config['driver']}:", $dsn);
    }

    $this->cadena_conexion = $dsn;
    //Si usuario viene en parámetro $user => utilizo ese
    //Si usuario no viene en parámetro utilizo el de la configuración

    $this->connectionBd = new PDO(
      $this->cadena_conexion,
      $user ?? $config['user'],
      $password ?? $config['password'],
    );

    $this->connectionBd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  }

  public function query($query, $params = []): self {
    $this->comando = $this->connectionBd->prepare($query);
    $this->comando->execute($params);

    //Devuelve los registros, en formato Array Asociativo PDO::FETCH_ASSOC
    return $this;
  }

  /**
   * Obtiene un elemento o lanza un error 404 (not found)
   */
  public function findOrFail(): array {
    $item = $this->comando->fetch();

    if (!$item) {
      abort(Response::NOT_FOUND);
    }

    return $item;
  }

  /**
   * obtiene varios recursos
   */
  public function get(): false|array {
    return $this->comando->fetchAll();
  }

  /**
   * obtiene un recurso
   */
  public function find(): array {
    return $this->comando->fetch();
  }

}
