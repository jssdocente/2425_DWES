<?php

namespace UT3\EC01\N106;

enum DadoPokerFiguraEm: int {
  case AS = 1;
  case K = 2;
  case Q = 3;
  case J = 4;
  case _7 = 5;
  case _8 = 6;

  public function getName(): string {
    return match ($this) {
      self::_7 => "7",
      self::_8 => "8",
      default => $this->name,
    };
  }

  //Método para generar un valor aleatorio
  public static function random(): self {
    return DadoPokerFiguraEm::from(rand(1, count(DadoPokerFiguraEm::cases())));
  }
}

class JuegoPoker {

  /**
   * @var array<DadoPokerFiguraEm>
   */
  private array $tiradas = [];
  private DadoPokerFiguraEm $lastTirada;
  private bool $finalizado = false;
  private bool $iniciado = false;

  private function checkIsFinalizado(): void {
    $this->finalizado = $this->getTotalPuntos() >= 21;
  }

  public function reiniciar(): void {
    unset($this->lastTirada);
    $this->tiradas = [];
    $this->finalizado = false;
    $this->iniciado = false;
  }

  public function iniciar(): void {
    $this->iniciado = true;
    $this->finalizado = false;
  }

  public function tirar(): DadoPokerFiguraEm {
    if (!$this->iniciado) {
      throw new \Exception("El juego no ha sido iniciado");
    }

    $this->lastTirada = DadoPokerFiguraEm::random();
    $this->tiradas[] = $this->lastTirada;
    
    $this->checkIsFinalizado();

    return $this->lastTirada;
  }

  public function getLastTirada(): ?DadoPokerFiguraEm {
    return $this->lastTirada;
  }

  public function getTotalPuntos(): int {
    return array_reduce($this->tiradas, fn(int $total, DadoPokerFiguraEm $tirada) => $total + $tirada->value, 0);
  }

  public function isFinalizado(): bool {
    return $this->finalizado;
  }

  public function getTiradas(): array {
    return $this->tiradas;
  }
}

$juego = new JuegoPoker();
$juego->iniciar();

do {
  $juego->tirar();
} while (!$juego->isFinalizado());

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Poker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
</head>
<body>
<main>
    <h1>Juego de Poker</h1>
    <p>El juego consiste en lanzar un dado de poker con 6 caras, cada una con un valor diferente.</p>
    <p>El valor de cada cara es:</p>
    <ul>
        <li>AS = 1</li>
        <li>K = 2</li>
        <li>Q = 3</li>
        <li>J = 4</li>
        <li>7 = 5</li>
        <li>8 = 6</li>
    </ul>
    <p>El juego consiste en lanzar el dado y acumular los puntos obtenidos en cada tirada.<br>
    <p>El juego termina cuando el jugador decide parar o cuando obtiene 21 puntos.<br>
        El jugador ha obtenido los siguientes resultados:</p>
    <ul>
      <?php foreach ($juego->getTiradas() as $tirada): ?>
          <li>Ha sacado un <?php echo $tirada->getName() ?> (<?= $tirada->value ?> ).</li>
      <?php endforeach; ?>
    </ul>
    <p>En total ha obtenido <?php echo $juego->getTotalPuntos() ?> puntos.</p>
    <p>El juego ha finalizado.</p>


</main>
</body>
</html>





