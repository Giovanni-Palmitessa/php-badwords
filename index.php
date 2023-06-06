<?php 
    $word_to_censure = $_GET['word'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bad Words</title>
  </head>
  <body>
    <h1>Parola da censurare: <?= $word_to_censure; ?></h1>
    <p>Paragrafo originale: <?= $_GET['paragraph']?></p>
  </body>
</html>
