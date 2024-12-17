<ul>
    <li><?= $infoTirada["descripcion"] ?></li>

  <?php if ($infoTirada["jugador"] ?? false): ?>
      <div style="margin-top: 10px; color: <?= $infoTirada["jugador"]->equipo->getColor() ?>">
        <?= "Jugador Eliminado " . $infoTirada["jugador"] ?>
          <h4>Jugadores Vivos del Equipo <?= $infoTirada["jugador"]->equipo->name ?> </h4>
          <ul>
            <?php foreach ($infoTirada["equipo"]->getJugadoresVivos() as $jugador): ?>
                <li><?= $jugador ?></li>
            <?php endforeach; ?>
          </ul>
      </div>
    <hr>
  <?php endif; ?>
</ul>