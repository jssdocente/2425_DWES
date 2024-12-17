<?php

  $heading = "Detalle de la Nota";

  require __DIR__ . '/../partials/header.php';
  require __DIR__ . '/../partials/nav.php';
  require __DIR__ . '/../partials/banner.php';
?>

<main>
  <div class="mx-auto  max-w-7xl py-6 sm:px-6 lg:px-8">
    <!--    <h1 class="text-2xl mb-8">$note['id']</h1>-->

    <h5 class="mb-3"><?= $item['title'] ?></h5>
    <p><?= $item['body'] ?></p>
    <div class="mt-10">
      <a href="/notes" class="text-sky-500 hover:text-sky-600">↩️ Volver</a>
    </div>

    <div class="mt-5">
      <form class="mt-6" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="id" value="<?= $item['id'] ?>">
        <button class="text-sm text-red-500">Delete</button>
      </form>
    </div>

  </div>

</main>

<!-- Footer -->
<?php require __DIR__ . '/../partials/footer.php' ?>
