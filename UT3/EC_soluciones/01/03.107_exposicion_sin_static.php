<?php

namespace UT3\EC\G01\E107bis;

//region Enums Definitions
use Exception;

enum EntradaTipoEm: int {
  case Normal = 1;
  case Jubilado = 2;
  case Estudiante = 3;
  case VIP = 4;

  /* LA FUNCIÓN RANDOM, DENTRO DEL ENUMERADO DEBE SER STATIC, PERO PARA NO LIAROS, LA HE REALIZADO FUERA. */
}

enum ZonaTipoEm: int {
  case SalaPrincipal = 1;
  case SalaCompraVenta = 2;
  case SalaVIP = 3;
}

//endregion

//region Clases Zonas
abstract class Zone {
  public readonly ZonaTipoEm $tipo;
  public readonly int $entradasDisponibles;  //Nº totales de entrada de una zona
  public int $entradasVendidas; //Nº total de entradas vendidas

  protected function __construct(ZonaTipoEm $tipo, int $entradasDisponibles) {
    $this->tipo = $tipo;
    $this->entradasDisponibles = $entradasDisponibles;
    $this->entradasVendidas = 0;
  }

  public static function createZone(ZonaTipoEm $tipo): Zone {

    switch ($tipo) {
      case ZonaTipoEm::SalaCompraVenta:
        return new SalaCompraVenta(200);
      case ZonaTipoEm::SalaVIP:
        return new SalaVip(25);
      default:
      case ZonaTipoEm::SalaPrincipal:
        return new SalaPrincipal(1000);
    }
  }

  /**
   * Encapsula la creación de las entradas
   */
  public function createEntrada(EntradaTipoEm $tipo): Entrada {
    //Encasuplo la lógica del precio de la entrada => puedo obtenerla de una BD

    switch ($tipo) {
      case EntradaTipoEm::Estudiante:
        return new Entrada($tipo, 5);
      case EntradaTipoEm::VIP:
        return new Entrada($tipo, 20);
      case EntradaTipoEm::Jubilado:
        return new Entrada($tipo, 2);
      default:
      case EntradaTipoEm::Normal:
        return new Entrada($tipo, 10);
    }
  }


  /**
   * @throws Exception
   */
  public function venderEntrada(EntradaTipoEm $tipo, int $cantidad): array {

    if (($this->entradasVendidas + $cantidad) > $this->entradasDisponibles) {
      //NO Hay entradas
      throw new Exception("No hay entradas disponibles");
    }

    /* CREAR ENTRADAS */
    $entradas = [];
    for ($i = 0; $i < $cantidad; $i++) {
      $entradas[] = $this->createEntrada($tipo);
    }

    $this->entradasVendidas += $cantidad;

    return $entradas;
  }

}

class SalaPrincipal extends Zone {

  function __construct(int $entradas) {
    parent::__construct(ZonaTipoEm::SalaPrincipal, $entradas);
  }

}

class SalaCompraVenta extends Zone {

  function __construct(int $entradas) {
    parent::__construct(ZonaTipoEm::SalaCompraVenta, $entradas);
  }

}

class SalaVip extends Zone {

  function __construct(int $entradas) {
    parent::__construct(ZonaTipoEm::SalaVIP, $entradas);
  }
}

//endregion


class Entrada {
  public readonly EntradaTipoEm $tipo;
  public readonly float $precio;

  public function __construct(EntradaTipoEm $tipo, float $precio) {
    $this->tipo = $tipo;
    $this->precio = $precio;
  }

  public function __toString(): string {
    return "Entrada: {$this->tipo->name} - Precio: {$this->precio}€";
  }

}

class Exposicion {

  private array $zonas = [];

  private $contabilidad = [
    "ttVentas" => 0,
    "ttEntradas" => 0,
  ];

  public function __construct() {
    $this->zonas = [
      ZonaTipoEm::SalaCompraVenta->value => $this->createZone(ZonaTipoEm::SalaCompraVenta),
      ZonaTipoEm::SalaPrincipal->value => $this->createZone(ZonaTipoEm::SalaPrincipal),
      ZonaTipoEm::SalaVIP->value => $this->createZone(ZonaTipoEm::SalaVIP),
    ];
  }

  /**
   * Encapsula la creación de las zonas
   */
  private function createZone(ZonaTipoEm $tipo): Zone {

    switch ($tipo) {
      case ZonaTipoEm::SalaCompraVenta:
        return new SalaCompraVenta(200);
      case ZonaTipoEm::SalaVIP:
        return new SalaVip(25);
      default:
      case ZonaTipoEm::SalaPrincipal:
        return new SalaPrincipal(1000);
    }
  }

  public function getRandomEntradaTipo(): EntradaTipoEm {
    return EntradaTipoEm::cases()[rand(0, count(EntradaTipoEm::cases()) - 1)];
  }


  public function comprarEntrada(EntradaTipoEm $tipo, ZonaTipoEm $zonaTipo, int $cantidad): bool|array {
    //Obtener la zona
    /** @var Zone $zona */
    $zona = $this->zonas[$zonaTipo->value];

    $resultado = false;

    //Comprar la entrada en la zona.
    try {
      $entradas = $zona->venderEntrada($tipo, $cantidad);

    } catch (Exception $ex) {
      //Logar esta información
      echo $ex->getMessage();
      return false;
    }

    //Contabilizar la Venta.
    $totalVenta = array_reduce($entradas, fn(float $total, Entrada $entrada) => $entrada->precio, 1.0);
    $this->contabilidad["ttVentas"] += $totalVenta;
    $this->contabilidad["ttEntradas"] += $cantidad;

    //retorna. Si no hay entradas, devolver False, y si hay, devolver la entrada
    $resultado = $entradas;

    return $resultado;
  }

  public function getZonas(): array {
    return $this->zonas;
  }

  public function getTotalVentas(): float {
    return $this->contabilidad["ttVentas"];
  }

  public function getTotalEntradasVendidas(): int {
    return $this->contabilidad["ttEntradas"];
  }

}


//Programa principal

$exp = new Exposicion();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Exposición Campanillas</h2>
<h3>Zonas de las Exposición</h3>
<ul>
  <?php foreach ($exp->getZonas() as $zona) : ?>
      <li><?= $zona->tipo->name ?></li>
  <?php endforeach; ?>
</ul>

<h3>Compra de Entradas</h3>
<?php foreach ($exp->getZonas() as $zona) : ?>
  <?php
  $entradas = [];
  foreach (range(1, rand(1, 8)) as $i) {
    $entrada = $exp->comprarEntrada($exp->getRandomEntradaTipo(), $zona->tipo, 1);
    if ($entrada) {
      $entradas = [...$entradas, ...$entrada];
    }
  }
  ?>
    <p>Entradas compradas: <?= count($entradas) ?> => Zona <?= $zona->tipo->name ?> </p>
    <ul>
      <?php foreach ($entradas ?? [] as $entrada) : ?>
          <li><?= $entrada ?></li>
      <?php endforeach; ?>
    </ul>
<?php endforeach; ?>

<h2>Contabilidad</h2>
<h4>Total Entradas Sala</h4>
<ul>
  <?php foreach ($exp->getZonas() as $zona) : ?>
      <li><?= $zona->tipo->name ?>: <?= $zona->entradasVendidas ?> </li>
  <?php endforeach; ?>
</ul>
<h4>Totales</h4>
<p>Total Entradas Vendidas: <?= $exp->getTotalEntradasVendidas() ?></p>
<p>Total Ventas: <?= $exp->getTotalVentas() ?>€</p>
</body>
</html>