<?php 
    $word_to_censure = $_GET['word'];
    $paragraph_original = $_GET['paragraph'];
    $new_paragraph = str_replace($word_to_censure, '***', $paragraph_original)
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
    <p>Paragrafo originale: <?= $paragraph_original; ?> ,di lunghezza: <?= strlen($paragraph_original) ?></p>
    <p>Paragrafo censurato: <?= $new_paragraph ?> ,di lunghezza: <?= strlen($new_paragraph)?></p>
  </body>
</html>
