<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  $name = "Dark Matter";
  $read = true;

  function fibb($n) {}

  $message = $read
    ? $message = "You have read $name"
    : $message = "No has leido el libro";

  $books = [
    "Libro 1",
    "Libro 2",
    "Libro 3"
  ];

  foreach ($books as $book) {
    print "El libro se llama $book";
  }

  ?>
  <h1>
    <?php echo $message; ?>
    <?= $message; ?>

  </h1>

  <p><?php echo "Me llamo ..."?>;</p> 
  <p><?= "Me llamo ..."?>;</p>

</body>

</html>