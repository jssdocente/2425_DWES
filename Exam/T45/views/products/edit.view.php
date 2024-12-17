<?php

$heading = "Detalle del producto";

require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/nav.php';
require __DIR__ . '/../partials/banner.php';
?>

<main class="px-4 sm:px-6 lg:px-10 lg:py-4">
  <form method="POST" action="/product">
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <p class="mt-1 text-sm/6 text-gray-600">Información del producto.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <div class="sm:col-span-4">
            <label for="name" class="block text-sm/6 font-medium text-gray-900">Nombre</label>
            <div class="mt-2">
              <div
                class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input type="text" name="name" id="name"
                       class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                       placeholder="nombre del producto"
                       value="<?= $item['name'] ?? '' ?>">
              </div>
            </div>
            <?php if ($errors['name'] ?? false) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['name'] ?></p>
            <?php endif; ?>
          </div>
          <!-- Categoria nombre -->
          <div class="sm:col-span-4">
            <label for="category" class="block text-sm/6 font-medium text-gray-900">Categoria</label>
            <div class="mt-2">
              <div
                class="flex items-center rounded-md bg-white pl-3 outline outline-1 -outline-offset-1 outline-gray-300 focus-within:outline focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                <input type="text" name="category" id="category"
                       class="block min-w-0 grow py-1.5 pl-1 pr-3 text-base text-gray-900 placeholder:text-gray-400 focus:outline focus:outline-0 sm:text-sm/6"
                       placeholder="nombre de la categoria"
                       value="<?= $item['category'] ?? '' ?>">
              </div>
            </div>
            <?php if ($errors['category'] ?? false) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['category'] ?></p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-6 flex items-center justify-between gap-x-6">
      <button type="submit" form="form_delete"
              class="py-2 px-4 bg-red-500 text-white rounded-md text-sm font-medium border border-transparent hover:bg-red-700">
        Borrar
      </button>
      <div class="flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm/6 font-semibold text-gray-900"><a href="/products">Cancel</a></button>
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="<?= $item['id'] ?>">
        <button type="submit"
                class="py-2 px-4 bg-blue-500 text-white rounded-md text-sm font-medium border border-transparent hover:bg-blue-700">
          Actualizar
        </button>
      </div>

    </div>
  </form>

  <!--  FORMULARIO PARA BORRAR UN PRODUCTO-->
  <form id="form_delete" method="POST" action="/product">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="id" value="<?= $item['id'] ?>">
  </form>

</main>

<!-- Footer -->
<?php require __DIR__ . '/../partials/footer.php' ?>
