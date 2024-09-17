<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  
  $bookName= "Harry Potter";
  $read = true;

  if ($read) {
    $message = "Has leido el libro $bookName";
  }


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
</body>

</html>