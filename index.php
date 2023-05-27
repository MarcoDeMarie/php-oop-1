<?php

require_once __DIR__ . '/models/movie.php';

$movies=[
  new Movie ('Thor 1', 114),
  new Movie ('iron Man 1', 126),
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Movies</title>
</head>
<body>
  <h1>MOVIES</h1>

  <?php foreach($movies as $movie):?>

    <h1><?php $movie->getTitle() ?></h1>
    <p><?php $movie->getDuration() ?></p>
  <?php endforeach; ?>
  
</body>
</html>