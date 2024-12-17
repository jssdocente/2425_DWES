<?php
  require __DIR__ . '/../partials/header.php';
  require __DIR__ . '/../partials/nav.php';
  require __DIR__ . '/../partials/banner.php';
?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <?php foreach ($notes as $note) : ?>
      <li>
        <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
          <?= htmlspecialchars($note['title']) ?> - <?= htmlspecialchars($note['body']) ?>
        </a>
      </li>
    <?php endforeach; ?>

    <p class="mt-6">
      <a href="/notes/create" class="text-blue-500 hover:underline">Create Note</a>
    </p>
  </div>
</main>

<!-- Footer -->
<?php require __DIR__ . '/../partials/footer.php' ?>
