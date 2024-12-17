<?php

enum EquipoTipo: int {
  case Rojo = 1;
  case Verde = 2;
  case Azul = 3;

  public function getColor(): string {
    return match ($this) {
      self::Rojo => "red",
      self::Verde => "green",
      self::Azul => "blue",
    };
  }
}

class Bombo {
  private array $numbers = [];

  public function __construct(int $min, int $max) {
    for ($i = $min; $i <= $max; $i++) {
      $this->numbers[] = $i;
    }
    $this->moverBombo();
  }

  /**
   * Mezcla las bolas del bombo
   */
  public function moverBombo(): void {
    shuffle($this->numbers);
  }

  /**
   * Extrae una bola del bombo
   */
  public function sacarBola(): int {
    return array_pop($this->numbers);
  }
}

class Jugador {
  public readonly int $codigo;
  public readonly string $nombre;
  public readonly EquipoTipo $equipo;
  public readonly int $numBoleto;

  private bool $eliminado = false;

  public function __construct(int $codigo, string $nombre, EquipoTipo $equipo, int $numBoleto) {
    $this->codigo = $codigo;
    $this->nombre = $nombre;
    $this->equipo = $equipo;
    $this->numBoleto = $numBoleto;
  }

  public function eliminar() {
    $this->eliminado = true;
  }

  public function isEliminado(): bool {
    return $this->eliminado;
  }

  public function __toString(): string {
    return "($this->codigo) Jugador: $this->nombre Boleto: $this->numBoleto Equipo: {$this->equipo->name}";
  }
}


class Equipo {
  public readonly EquipoTipo $tipo;
  public readonly int $minBoleto, $maxBoleto;

  private array $namesPlayers = ["Juan", "Pedro", "Luis", "Ana", "Maria", "Sara", "Lucia", "Pablo", "Carlos", "Javier"];
  private ?Bombo $bombo = null;

  /**
   * @var array<Jugador>
   */
  private array $jugadores = [];

  public function __construct(EquipoTipo $tipo, int $minBoleto, int $maxBoleto) {
    $this->tipo = $tipo;
    $this->minBoleto = $minBoleto;
    $this->maxBoleto = $maxBoleto;

    $this->bombo = new Bombo($minBoleto, $maxBoleto);
  }

  /**
   * Crea un jugador, lo añade al equipo y lo devuelve
   */
  public function construirJugador(): Jugador {
    $numBoleto = $this->bombo->sacarBola();
    $jugador = new Jugador(count($this->jugadores) + 1, $this->namesPlayers[array_rand($this->namesPlayers)], $this->tipo, $numBoleto);
    $this->jugadores[] = $jugador;

    return $jugador;
  }

  public function getJugadores(): array {
    return $this->jugadores;
  }

  /**
   * Devuelve los jugadores que no han sido eliminados
   */
  public function getJugadoresVivos(): array {
    return array_filter($this->jugadores, fn($jugador) => !$jugador->isEliminado());
  }
}

class JuegoCalamar {

  private array $equipos = [];

  private Bombo $bombo;
  private bool $iniciado = false;

  public function __construct() {
    $this->equipos[] = new Equipo(EquipoTipo::Rojo, 1, 33);
    $this->equipos[] = new Equipo(EquipoTipo::Verde, 34, 66);
    $this->equipos[] = new Equipo(EquipoTipo::Azul, 67, 100);

    $this->bombo = new Bombo(1, 100);
  }

  /**
   * Crea los jugadores de los equipos
   */
  private function crearJugadores(int $numJugadores): void {
    $pendientes = $numJugadores;

    while ($pendientes > 0) {
      foreach ($this->equipos as $equipo) {
        if ($pendientes > 0) {
          $equipo->construirJugador();
          $pendientes--;
        }
      }
    }
  }

  /**
   * Inicia el juego con el número de jugadores
   */
  public function iniciar(int $numJugadores): void {
    $this->crearJugadores($numJugadores);
    $this->iniciado = true;
  }

  /**
   * Realiza una tirada del bombo.
   * Devuelve un array con la información de la tirada
   */
  public function tirada(): array {
    if (!$this->iniciado) {
      throw new Exception("El juego no ha sido iniciado");
    }

    $infoTirada = [];

    //extraer bola
    $numBola = $this->bombo->sacarBola();

    $infoTirada["bola"] = $numBola;
    $infoTirada["descripcion"] = "Bola extraida: $numBola, no hay jugador eliminado";

    //Buscar si un jugador tiene ese número, si lo tiene, eliminarlo, sino, no hacer nada
    foreach ($this->equipos as $equipo) {
      foreach ($equipo->getJugadores() as $jugador) {
        if ($jugador->numBoleto == $numBola) {
          $jugador->eliminar();
          $infoTirada["descripcion"] = "Bola extraida: $numBola, Jugador Eliminado ";
          $infoTirada["equipo"] = $equipo;
          $infoTirada["jugador"] = $jugador;  //Indica jugador eliminado
          break;
        }
      }
    }

    return $infoTirada;
  }


  public function getEquipos(): array {
    return $this->equipos;
  }

  /**
   * Devuelve el jugador ganador si lo hay, sino devuelve false
   */
  public function hasJugadorGanador(): Jugador|false {

    $vivos = [];

    foreach ($this->equipos as $equipo) {
      $vivos = [...$vivos, ...$equipo->getJugadoresVivos()];
    }

    if (count($vivos) > 1) {
      return false;
    }

    return $vivos[0];
  }
}

$juego = new JuegoCalamar();
$juego->iniciar(9);

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Juego Calamar</title>
</head>

<body>
<h2>Juego del Calamar</h2>
<h3>Equipos</h3>
<ul>
  <?php foreach ($juego->getEquipos() as $equipo): ?>
      <li>
          <h4>Equipo <?= $equipo->tipo->name ?></h4>
          <ul>
            <?php foreach ($equipo->getJugadores() as $jugador): ?>
                <li><?= $jugador ?></li>
            <?php endforeach; ?>
          </ul>
      </li>
  <?php endforeach; ?>
</ul>

<h3>Comienza el Juego</h3>
<?php
$jugadorGanador = null;

while (true) {
  $infoTirada = $juego->tirada();
  require '02.partidaInfo.view.php';

  $ganador = $juego->hasJugadorGanador();
  if ($ganador) {
    $jugadorGanador = $ganador;
    break;
  }
}
?>

<h2>Jugador Ganador</h2>
<h3 style="color: <?= $jugadorGanador->equipo->getColor() ?>"><?= $jugadorGanador ?></h3>


</body>