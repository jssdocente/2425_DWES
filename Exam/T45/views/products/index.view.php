<?php
require __DIR__ . '/../partials/header.php';
require __DIR__ . '/../partials/nav.php';
require __DIR__ . '/../partials/banner.php';
?>


<div class="px-4 sm:px-6 lg:px-10 lg:py-4">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <p class="mt-2 text-sm text-gray-700">Lista de productos.</p>
    </div>
    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
      <button type="button"
              class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        <a href="/product/create">Agregar producto</a>

      </button>
    </div>
  </div>
  <div class="mt-8 flow-root">
    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <table class="min-w-full divide-y divide-gray-300">
          <thead>
          <tr>
            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">Nombre</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Categoria</th>
            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
              <span class="sr-only">Editar</span>
            </th>
          </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">

          <?php foreach ($items as $product): ?>
            <tr>
              <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-blue-900 sm:pl-0"><a href="/product/show?id=<?= $product['id'] ?>"><?= $product['name'] ?></a></td>
              <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"><?= $product['category'] ?></td>
              <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                <a href="/product/edit?id=<?= $product['id'] ?>" class="text-indigo-600 hover:text-indigo-900">Edit<span
                    class="sr-only">, Lindsay Walton</span></a>
              </td>
            </tr>
          <?php endforeach; ?>
          </tbody>

        </table>
      </div>
    </div>
  </div>
</div>
